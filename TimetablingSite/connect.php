<?php
$UserName=$_POST['UserName'];
$email=$_POST['email'];
$confirmPassword=$_POST['confirmPassword'];
$Pass=$_POST['Pass'];
$Department=$_POST['Department'];
$Program=$_POST['Program'];
$YearOfStudy=$_POST['YearOfStudy'];
$Semester=$_POST['Semester'];


$servername="localhost";
$username="root";
$password="";
$database="computer_lab";

$conn=new mysqli("localhost","root",'',"computer_lab");




if($conn-> connect_error)
{
    die('connection failed  :' .$conn ->$connect_error );
}
else {
    $sql=("INSERT INTO students(UserName,email,confirmPassword,Pass,Department,Program,YearOfStudy,Semester) 
    VALUES('$firstName','$lastName','$registration','$email','$confirmPassword','$Pass','$Department','$Program','$YearOfStudy','$Semester')");
}

// var_dump($sql); 'exit';


 
$sql = mysqli_query($conn ,$sql);

if ($sql == True){
    echo "Data inserted successfully!!";
}
else{
    echo "Failed!!";
}


?>