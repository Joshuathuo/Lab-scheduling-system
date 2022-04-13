<?php
  
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet"type="text/css" href="css/style.css"> -->

 <link rel="stylesheet" href="css/register.css">
<style>
    body{
    background-image: url("Images/computer-lab.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}  

.form-content{
    display: grid;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    justify-content: center;
    align-items: center;
}
.form-content div{
margin: 5px 3px;
}
</style>
</head>

<body>


    <div class="register-body">
        <div class="register-body-content">
            <div class="title">
                <h1>Register Here</h1>
            </div>
            <div class="register-navbar">
                <nav>

                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">About us</a></li>
                        <!-- <li><a href="#">Register</a></li> -->
                        <li><a href="login.php">Login</a></li>
                        <!-- <div class="login">
                        <button class="loginbtn">Login</button>
                        <div class="login-content">
                            <a href="#">Student</a>
                            <a href="#">Lecturer</a>
            
                            <a href="#">Admin</a>
            
                        </div>
                    </div> -->
                        <div style="clear: both;"></div>
                    </ul>

                </nav>
            </div>

        </div>
        <div class="register-main-section">
            
            <div class="main-section-content">
                <form action="registerAction.php" method="POST" autocomplete="off">
                    <div class="form-main">

                        <div class="form-content">
                            
                                <div>
                                    <b><label for="firstName">UserName</label></b>
                                    <input type="text" class="UserName" name="UserName" placeholder="UserName" required />
                                </div>
                               
                            

                            <div class="form-details">
                                <div>
                                    <b><label for="email">Email</label></b>
                                    <input type="email" class="email" name="email" placeholder="Email" required />
                                </div>
                            
                            </div>


                            
                                <div>
                                    <b><label for="department">Department</label></b>
                                    <input type="text" class="department" name="Department" placeholder="Department" required />
                                </div>
                                <div>
                                    <b><label for="program">Program</label></b>
                                    <input type="text" class="program" name="Program" placeholder="Program" required />
                                </div>
                            


                            
                                <div>
                                    <b><label for="year">Year</label></b>
                                    <input type="text" class="year" name="YearOfStudy" placeholder="Year" required />
                                </div>
                                <div>
                                    <b><label for="semester">Semester</label></b>
                                    <input type="text" class="semester" name="Semester" placeholder="Semester" required />
                                </div>
                            
                            <
                                <div>
                                    <b><label for="pass">Password</label></b>
                                    <input type="password" class="pass" name="Pass" placeholder="password" required />
                                </div>
                                <div>
                                    <b><label for="conpass">Confirm Password</label></b>

                                    <input type="password" class="conpass" name="confirmPassword" placeholder="Confirm Password" required />
                                </div>


                         
                        </div>
                        <div class="form-btn">
                            <button type="submit" name="SubmitBtn">Register</button>
                        </div>
                        <div class="login-register-text">
                            <p class="login-register-text">Already have an account? <a href="studentlog.php">Login</a></p>


                        </div>

                    </div>
                </form>
            </div>

        </div>

        
    </div>

</body>

</html>