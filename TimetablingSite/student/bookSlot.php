<?php
require_once "../connect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .slots-form{
            margin: 20px 300px;
        background-color: rgba(0, 0, 0, 0.7);
        height: 300px;
        padding: 50px;
        
        }
        .bookBtn{
            align-items: center;
            justify-content: center;
            margin-top: 60px;
            text-align: center;
        }
        .bookBtn button{
              background-color: green;
              color: wheat;
              border-radius: 10px;
              padding: 6px 20px;

        }
        .bookBtn button:hover{
              background-color: black;
              color: white;
              
        }
        .slots-form select{
           height: 30px;
        }
    </style>
</head>
<body>

    <div class="slotsMain">
        <div class="header">

        </div>
        <div class="slots-form">
            <form action="" method="post">
             
           <?php
                   $sql="SELECT room,daysOfTheWeek,start_time FROM timetable WHERE room='' and start_time=''";
                   $result= mysqli_query($conn,$sql);
                     if(mysqli_num_rows($result)){ 
                        //  echo "No room is available at ";
                                
               }
               else
               { ?>

                         <select name="room" class="lab_room" id=""> 
                                    <?php

                                    $sql=("SELECT daysOfTheWeek,room,start_time  FROM timetable");
                                    $dep= mysqli_query($conn,$sql);
                                    while($dp=mysqli_fetch_array($dep)){
                                        $dp_id=$dp[0]." ".$dp[2]." ".$dp[1];
                                        echo "<option value='$dp_id'>".$dp[0]." ".$dp[2]." ".$dp[1]."</option>";
                                        }
                                        ?>

                                    </select>

                                    <?php 
                                } ?>

                                <div class="bookBtn">
                                    <button type="submit" name="book">book</button>
                                </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['book'])){
  $room=$_POST['room'];

  $sql="INSERT INTO reserve (RoomReserved) VALUES('$room')";
  if(mysqli_query($conn,$sql))
{
   
    
    // $_SESSION['email']=$email;
    
    // $_SESSION['userId']=mysqli_insert_id($conn); 
    echo "Send successfuly";
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