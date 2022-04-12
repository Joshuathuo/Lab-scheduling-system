<?php
session_start();

if(!isset($_SESSION['adminId'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/home</title>
    <link rel="stylesheet"type="text/css" href="css/style.css">

	<style>
		.admin__main-body{
    background-image: url("Admin-Images/computer-lab.jpg");
    background-repeat: no-repeat;
    background-size: cover;
height: 740px;
    justify-content: center;
    align-items: center;
       }
		.admin__main-body .admi__navbar{
    background-color: black;
    color: white;
    display: grid;
    grid-template-columns: 10fr 1fr;
	justify-content: center;
	align-items: center;
}
.logoutAdmin{
	padding: 10px 5px;
}
.logoutAdmin button{
	
}
	</style>
</head>
<body>
   <div class="admin__main-body">
   <div class="admi__navbar">
       <div class="">
           <h1>Hello Admin</h1>      
       </div>

	   <div class="logoutAdmin">
			 <div class="log">
				 <button><a href="logout.php">Logout</a></button>
			 </div>

		   </div>

		  </div>

       <div class="admin__main-section">
             <div class="admin-links">

			 <div class="faculty">
                     <a href="index.php?info=faculty">Faculty</a>
                 </div>

			 <div class="department">
                     <a href="index.php?info=department">Department</a>
                 </div>
                

                 <div class="Program">
                    <a href="index.php?info=program">Program</a>
                </div>

                <div class="lecturer">
                    <a href="index.php?info=lecturer">Lecturer</a>
                </div>

                <div class="Course">
                    <a href="index.php?info=room">Computer lab</a>
                </div>
                 
				<div class="courseStudy">
                    <a href="index.php?info=courseStudy">Course Study</a>
                </div>
				<div class="semester">
                    <a href="index.php?info=session">Session</a>
                </div>
                <div class="timetable">
                    <a href="index.php?info=timetable">Timetable</a>
                </div>
             </div>

             <div class="admin-form">
                  <div id="">
                      
                  <?php 
				@$info=$_REQUEST['info'];
				if($info!="")
				{
					if($info=="faculty")
				{
					include('faculty.php');
					}

				if($info=="department")
				{
					include('department.php');
					}

                    if($info=="program")
				{
					include('program.php');
					}

				elseif($info=="session")
				{
					include('session.php');
					}
				elseif($info=="sendSMS")
				{
					include('sendSMS.php');
				     }
					 
					 elseif($info=="room")
				{
					include('room.php');
				     }
			    elseif($info=="courseStudy")
				{
					include('courseStudy.php');
					}
				elseif($info=="lecturer")
				{
					include('lecturer.php');
					}
				elseif($info=="timetable")
				{
					include('timetable.php');
					}
					elseif($info=="add_faculty")
					{
						include('add_faculty.php');
						}
					
				elseif($info=="add_department")
				{
					include('add_department.php');
					}
					
			    elseif($info=="add_room")
				{
					include('add_room.php');
					}

					elseif($info=="add_courseOffer")
				{
					include('add_courseOffer.php');
					}
					
				elseif($info=="add_session")
				{
					include('add_session.php');
					}
					
				elseif($info=="add_lecturer")
				{
					include('add_lecturer.php');
					}
					
				elseif($info=="add_student")
				{
					include('add_student.php');
					}
					
					
				elseif($info=="add_timetable")
				{
					include('add_timetable.php');
					}

					elseif($info=="showtimetable")
					{
						include('showtimetable.php');
						 }

                elseif($info=="updatecourse")
				{
					include('updatecourse.php');
				     }
              
                elseif($info=="updatesemester")
				{
					include('updatesemester.php');
				     }

                elseif($info=="updatesubject")
				{
					include('updatesubject.php');
				     }					 
					
				elseif($info=="updatestudent")
				{
					include('updatestudent.php');
				     }

                elseif($info=="updateteacher")
				{
					include('updateteacher.php');
				     }

                elseif($info=="updatetimetable")
				{
					include('update_timetable.php');
				     }

					
					 
					}
				else
				{
				?>

                 <?php
                }
                ?>
                  </div>
             </div>
       </div>

   </div>
</body>

</html>
<?php
}
?>