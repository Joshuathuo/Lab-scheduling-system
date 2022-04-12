<?php
require_once "connect.php";


if(isset($_POST['submitBtn']))
{

$facultyName=$_POST["facultyName"];


$sql=("SELECT * FROM faculty WHERE facultyName='$facultyName'");
$result= mysqli_query($conn,$sql);


    if(mysqli_num_rows($result)){ 
                          
      
            echo "<font color='red'>This faculty already exists</font>";
          }                  
              else{                
$sql="INSERT INTO faculty (facultyName) VALUES('$facultyName')";

if(mysqli_query($conn,$sql))
{
   
    
    // $_SESSION['email']=$email;
    
    // $_SESSION['userId']=mysqli_insert_id($conn); 
    
    header("location: add_faculty.php");
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
    <div class="heading"><h1>Add new Faculty</h1></div>
  <form action="" method="post" enctype="multipart/form-data">
                    <div class="main__form">
                        <div class="form__content">
                            <div class="first__name content">
                                <label for="fname">Faculty name</label><br>
                                <input type="text" name="facultyName" id="faculty" required>
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