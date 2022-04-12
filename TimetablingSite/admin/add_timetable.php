<?php
require_once "connect.php";

if(isset($_POST['submitBtn']))
{
$programName=$_POST["department"];
$departmentName=$_POST["program"];
$semester=$_POST["semester"];
$lecturer=$_POST["lecturer"];
$courseCode=$_POST["coursestudy"];
$startTime=$_POST["start_time"];
$finishTime=$_POST["end_time"];
$room=$_POST["room"];
$yrOfStudy=$_POST["yrOfStudy"];

$days=$_POST["days"];


$que=mysqli_query($conn,"select * from timetable where room='$room' and start_time='$startTime' and daysOfTheWeek='$days'");	
    
        if($row=mysqli_num_rows($que))
        {
        print "<font color='red'>Room is occupied at this time</font>";
        }
        else
        {
            $que=mysqli_query($conn,"select * from timetable where Program='$programName' and start_time='$startTime' and daysOfTheWeek='$days'");	
    
        if($row=mysqli_num_rows($que))
        {
        print "<font color='red'>This program is in another session at this time</font>";
        }
        else
        {
            $que=mysqli_query($conn,"select * from timetable where lecturer='$lecturer' and start_time='$startTime' and daysOfTheWeek='$days'");	
    
            if($row=mysqli_num_rows($que))
            {
            print "<font color='red'>Lecturer as another class at this time</font>";
            }
            else
            {
$sql="INSERT INTO timetable (department,Program,yrOfStudy,semester,lecturer,courseCode,daysOfTheWeek,start_time,finish_time,room) VALUES('$departmentName','$programName','$yrOfStudy','$semester','$lecturer','$courseCode','$days','$startTime','$finishTime','$room')";

if(mysqli_query($conn,$sql))
{




//     $que=mysqli_query($conn,"select * from timetable where Program='$programName' and semester='$semester' and lecturer='$lecturer' and courseCode='$courseCode' and start_time='$startTime' and room='$room' ");	
    
//         if($row=mysqli_num_rows($que))
//         {
//         print "<font color='red'>This user already exists</font>";
//         }
//         else
//         {
// $sql="INSERT INTO timetable (department,Program,semester,lecturer,courseCode
// ,start_time,finish_time,room) VALUES('$departmentName','$programName','$semester','$lecturer','$courseCode','$startTime','$finishTime','$room')";

// if(mysqli_query($conn,$sql))
// {
   
    
    // $_SESSION['email']=$email;
    
    // $_SESSION['userId']=mysqli_insert_id($conn); 
    $err="<font color='blue'>Congrats Your Data Saved!!!</font>";
    header("location: index.php?info=program.php");
        ?>
        
        <?php
}
else{
    ?>
        <script>
            window.alert("Error ");
        </script>
        <!-- <meta http-equiv="refresh" content="2;url=signup.php" /> -->
        <?php
    echo mysqli_error($conn);
}
}
 }
 }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
      *{
          padding: 0;
          margin: 0;
      }
      .main-page{
    background-image: url("Admin-Images/computer-lab.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 800px;
    justify-content: center;
    align-items: center;
       }
       .add-timetable{
           
           width: 600px;
           background-color: rgb(33, 131, 4);
           justify-content: center;
           align-items: center;
           margin: 0 250px;
       }
.add-timetable h1{
    color: white;
    text-align: center;
    padding: 5px 0;
}
       .main__form{
           display: grid;
           grid-template-rows: 9fr 1fr;
           margin: 10px 20px;
       }
       .form__content
       {
        display: grid;
           grid-template-rows: 3fr 3fr 3fr 3fr;
       }

       .dep_prog{
        display: grid;
           grid-template-columns: 1fr 1fr;
       }
       .lec_code{
        display: grid;
           grid-template-columns: 1fr 1fr;
       }

       .room_sem{
        display: grid;
           grid-template-columns: 2fr 1fr 1fr;
       }

       .time_slots{
        display: grid;
           grid-template-columns: 1fr 1fr 1fr;
       }
       .submit__btn{
           align-items: center;
           justify-content: center;
           text-align: center;
       }
       .main__form button{
          
           width: 100px;
           padding: 10px;
           text-align: center;
           border-radius: 20px;
           margin-right: 20px;
       }


  </style>
</head>
<body>
<div class="main-page">
<div class="add-timetable">
    <div class="heading"><h1>Add class schedule</h1></div>
    <hr>
  <form action="" method="post" enctype="multipart/form-data">
                    <div class="main__form">
                        <div class="form__content">
                        <div class="dep_prog">
                        <div class="depatment">
                          Department
                        <select name="department" class="department" id=""> 
                        <?php

                            $dep=mysqli_query($conn,"SELECT departmentName FROM department");
                            while($dp=mysqli_fetch_array($dep))
                            {
                            $dp_id=$dp[0];
                            echo "<option value='$dp_id'>".$dp[0]."</option>";
                            }
                            ?>
                        
                        </select>
                        </div>
                       <div class="program"> Program
                       <select name="program" class="program" id=""> 
                           <option value=""></option>
                        <?php

                            $sql=("SELECT prog_name, Capacity FROM program");
                            $dep= mysqli_query($conn,$sql);
                            while($dp=mysqli_fetch_array($dep)){
                                $dp_id=$dp[0];

                                echo "<option value='$dp_id'>".$dp[0]."  "."Capacity:".$dp[1]."</option>";
                                }
                                ?>
                            
                            
                            </select>
                       </div>
                       </div>
                       <div class="lec_code">
                       
                              <div class="lecturer">Lecturer
                            <select name="lecturer" class="lecturer" id=""> 
                            <option value=""></option>
                         <?php

                                $sql=("SELECT userName FROM lecturer");
                                $dep= mysqli_query($conn,$sql);
                                while($dp=mysqli_fetch_array($dep)){
                                    $dp_id=$dp[0];
                                    echo "<option value='$dp_id'>".$dp[0]."</option>";
                                    }
                                    ?>
                                </select>
                                </div>

                             <div class="course">   Course code
                                        <select name="coursestudy" class="coursestudy" id=""> 
                                        <option value=""></option>

                                        <?php

                                        $sql=("SELECT courseCode FROM coursestudy");
                                        $dep= mysqli_query($conn,$sql);
                                while($dp=mysqli_fetch_array($dep)){
                                    $dp_id=$dp[0];
                                    echo "<option value='$dp_id'>".$dp[0]."</option>";
                                    }
                                    ?>
                                        
                                       
                                        </select>
                                        </div>
                       
                            </div>
                                  <div class="room_sem">
                                  <div class="room">
                                    Laboratory
                                    <select name="room" class="lab_room" id=""> 
                                    <option value=""></option>
                                    <?php

                                    $sql=("SELECT labName FROM lab_room");
                                    $dep= mysqli_query($conn,$sql);
                                    while($dp=mysqli_fetch_array($dep)){
                                        $dp_id=$dp[0];
                                        echo "<option value='$dp_id'>".$dp[0]."</option>";
                                        }
                                        ?>
                                    </select>
                                    </div>

                                    <div class="year">   Year Of study
                                        <select name=" yrOfStudy" class="year" id=""> 
                                        <option value=""></option>

                                        <?php

                                        $sql=("SELECT  yrOfStudy FROM yearOfStudy");
                                        $dep= mysqli_query($conn,$sql);
                                while($dp=mysqli_fetch_array($dep)){
                                    $dp_id=$dp[0];
                                    echo "<option value='$dp_id'>".$dp[0]."</option>";
                                    }
                                    ?>
                                        
                                       
                                        </select>
                                        </div>

                             <div class="semester">
                                        <?php

                                        $sql=("SELECT semester1, semester2 FROM semester");
                                        $result= mysqli_query($conn,$sql);
                                            if(mysqli_num_rows($result)>0){ 
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <div class="semester">
                                       
                                           <input type="radio" name="semester" id="" value="semester 1" checked><?php echo $row['semester1'] ?><br>

                    
                                           <input type="radio" name="semester" id="" value="semester 1"><?php echo $row['semester2'] ?>
                                        </div>

                                        <?php

                                        }
                                        }
                                        ?>
                                  </div>

                                  
                                  </div>

                           <div class="time_slots">

                           <div class="days">
                               <select name="days" id="days">
                                   <option value="Monday">Monday</option>
                                   <option value="Tuesday">Tuesday</option>
                                   <option value="Wednesday">Wednesday</option>
                                   <option value="Thursday">Thursday</option>
                                   <option value="Friday">Friday</option>
                               </select>
                           </div>
                           <div class="start_time">
                                  Start Time
                                <select name="start_time" class="start_time" id=""> 
                                <?php

                                $sql=("SELECT start_time FROM period");
                                $dep= mysqli_query($conn,$sql);
                                while($dp=mysqli_fetch_array($dep)){
                                    $dp_id=$dp[0];
                                      echo "<option value='$dp_id'>".$dp[0]."</option>"; 
                                      
                                    }
                                    ?>
                                
                                
                                </select>
                                </div>


                                <div class="end_time"> Finish time
                                <select name="end_time" class="end_time" id=""> 
                                <?php

                                $sql=("SELECT finish_time FROM period");
                                $dep= mysqli_query($conn,$sql);
                                while($dp=mysqli_fetch_array($dep)){
                                    $dp_id=$dp[0];
                                      
                                      echo "<option value='$dp_id'>".$dp[0]."</option>";
                                    }
                                    ?>
                                
                                
                                </select>
                                </div>
                           </div>

                        </div>
                        <div class="submit__btn ">
                            <button type="submit" name="submitBtn" class="main__btn">Add</button>
                            <button type="submit" name="" class="main__btn">Update</button>
                        </div>
                    </div>
                </form>
  </div>
</div>  
</body>
</html> 






