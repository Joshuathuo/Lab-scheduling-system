<?php
require_once "connect.php";
session_start();
if(isset($_POST['submitBtn']))
{
$faculty=$_POST["faculty"];
$courseTitle=$_POST["coursetitle"];

$coursecode=$_POST["coursecode"];

$sql="INSERT INTO coursestudy (faculty,courseTitle,courseCode) VALUES('$faculty','$courseTitle','$coursecode')";

if(mysqli_query($conn,$sql))
{
   
    
    // $_SESSION['email']=$email;
    
    // $_SESSION['userId']=mysqli_insert_id($conn); 
    
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
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
      .main-page{
    background-image: url("Admin-Images/computer-lab.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 800px;
    justify-content: center;
    align-items: center;
       }
       .add-department{
    display: grid;
    justify-content: center;
    align-items: center;
    align-items: center;
    grid-template-rows: 1fr 1fr 1fr;
    padding: 5px;
    background-color: white;
   
    width: 500px;
    margin: 0  auto;
}
  </style>
</head>
<body>
<div class="main-page">
<div class="add-department">
    <div class="heading"><h1>Add new Course</h1></div>
  <form action="" method="post" enctype="multipart/form-data">
                    <div class="main__form">
                        <div class="form__content">
                            <div class="name content">
                        
                       <select name="faculty" class="faculty" id=""> 
                          <?php

                            $dep=mysqli_query($conn,"SELECT facultyName FROM faculty");
                            while($dp=mysqli_fetch_array($dep))
                            {
                            $dp_id=$dp[0];
                            echo "<option value='$dp_id'>".$dp[0]."</option>";
                            }
                            ?>
                        </select>
                       
                            </div>
                            <div class="name content">
                                <label for="coursetitle">Course Title</label><br>
                                <input type="text" name="coursetitle" id="coursetitle" required>
                            </div>

                            <div class="name content">
                                <label for="coursecode">coursecode</label><br>
                                <input type="text" name="coursecode" id="year" required>
                            </div>

                        </div>
                        <div class="submit__btn ">
                            <button type="submit" name="submitBtn" class="main__btn">Add</button>
                        </div>
                    </div>
                </form>
  </div>
</div>  
</body>
</html>