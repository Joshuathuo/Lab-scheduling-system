<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/student.css">

    <title>Login</title>
</head>
<body>
    <div class="login-body">
    <li><a href="index.php">Home</a></li>

        <div class="login-body-content">
            <div class="title">
                <h1>Login Here</h1>
            </div>
            
            <div class="login-main-section">
                <div class="main-section-content">
                    <form action="">
                        <div class="form-main">
    
                            <div class="form-content">
            
                                <div class="form-details">
                                    
                                    <div class="form-reg">
                                        <input type="text" class="reg" placeholder="Username" required />
                                    </div>
    
                                    <div class="form-pass">
                                        <input type="password" class="pass" placeholder="password" required />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-btn">
                                <button type="submit">Login</button>
                            </div>
                            <div class="register-text">
                                <p class="register-text">Don't have an account? <a href="register.php">Register</a></p>
    
    
                            </div>
                           
     
                        </div>
                    </form>
                </div>
    
            </div>
    

        </div>
    </div>
    
</body>
</html> -->


<?php
include('connect.php');
	if (isset($_POST['login']))

		{
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['pass']);
			
			$query 		= mysqli_query($conn, "SELECT * FROM lecturer WHERE  pass='$password' and userName='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{	
               $_SESSION['username']=$username;		
					$_SESSION['staffID']=$row['staffID'];
					header('location:student/lecturerdashboard.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/student.css">
<style>
    *
{
    padding: 0;
    margin: 0;   
}
body{
    background-image: url("Images/computer-lab.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}   
.login-body 
{
  justify-content: center;
  align-items: center;
   margin: 0 auto;
   margin-top: 100px;
   
width: auto;
    
}
.login-body-content{
    color: white;
    height: 300px;
   width: 500px; 
   margin-top: 50px;
   text-align: center;
   background-color: rgb(15, 119, 6);
   margin: 20px 450px;
}
.login-main-section
{
    margin-top: 30px;
    text-align: center;
}
.form-main .form-content .form-details input

{
    margin:  10px 20px ;
    height: 30px;
    
    
   
}

.form-main .form-content .form-details{
    width: 100px;
}  

.form-pass
{
    margin-top: 30px;
}
.form-btn button
{
    margin-top: 20px;
    height: 30px;
    width: 130px;
    color: white;
    background-color: black; 
    border-radius: 50px; 

}


.register-text
{
    margin-top: 30px;
}

</style>
    <title>Login</title>
</head>
<body>
    <div class="login-body">
        <div class="login-body-content">
            <div class="title">
                <h1>Login Here</h1>
            </div>
            
            <div class="login-main-section">
                <div class="main-section-content">
                    <form action=""  method="post">
                        <div class="form-main">
    
                            <div class="form-content">
                                <div class="form-details">
                                    
                                    <div class="form-reg">
                                        <input type="text" class="reg" placeholder="Username" name="username" required />
                                    </div>
    
                                    <div class="form-pass">
                                        <input type="password" name="pass" class="pass" placeholder="password" required />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" name="login">Login</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
    
            </div>
    

        </div>
    </div>
    
    
</body>
</html>