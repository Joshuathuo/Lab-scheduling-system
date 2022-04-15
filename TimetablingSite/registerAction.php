<?php
 require_once "connect.php";
 session_start();
 
 $UserName=$_POST['UserName'];
$email=$_POST['email'];
$Pass=$_POST['Pass'];
$Department=$_POST['Department'];
$Program=$_POST['Program'];
$YearOfStudy=$_POST['YearOfStudy'];
$Semester=$_POST['Semester'];


$sql=("INSERT INTO students(firstName,email,Pass,Department,Program,YearOfStudy,Semester) VALUES('$UserName','$email','$Pass','$Department','$Program','$YearOfStudy','$Semester')");

var_dump($sql); 'exit';
if(mysqli_query($conn,$sql))
{

 
 $_SESSION['email']=$email;
 // //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
 $_SESSION['studentID']=mysqli_insert_id($conn); 
 //header('location: products.php');  //for redirecting
 header("location: studentlog.php");
     ?>
     <!-- <script>
         window.alert("Inserted successfully login");
     </script> -->
     <!-- <meta http-equiv="refresh" content="2;url=index.php" /> -->
     <?php
}
else{
 ?>
     <script>
         window.alert("Error in signing up please try again");
     </script>
     <meta http-equiv="refresh" content="2;url=signup.php" />
     <?php
 echo mysqli_error($conn);
}

?>