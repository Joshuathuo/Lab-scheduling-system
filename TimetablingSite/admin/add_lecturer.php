<?php
require_once "connect.php";
session_start();
if(isset($_POST['submitBtn']))
{
$gender=$_POST["gender"];
$userName=$_POST["userName"];
$password=$_POST["password"];
$email=$_POST["email"];
$sql="INSERT INTO lecturer (gender, userName, password, email) VALUES('$gender','$userName','$password','$email')";

if(mysqli_query($conn,$sql))
{
   
    
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
    <div class="heading"><h1>Add new Program</h1></div>
  <form action="" method="post" enctype="multipart/form-data">
                    <div class="main__form">
                        <div class="form__content">
                            <div class="name content">
                                <label for="userName">User Name</label><br>
                                <input type="text" name="userName" id="userName" required>
                            </div>

                            <div class="name content">
                                <label for="email">email</label><br>
                                <input type="text" name="email" id="email" required>
                            </div>

                            <div class="name content">
                            Gender
                                <select name="gender" id="">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="name content">
                                <label for="password">Password</label><br>
                                <input type="text" name="password" id="password" required>
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