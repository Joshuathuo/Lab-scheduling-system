<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <style>

    .main-page{
    background-image: url("Admin-Images/computer-lab.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 800px;
    justify-content: center;
    align-items: center;
       }
       .department-form{
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

.col-container{
    display: grid;
    grid-template-columns: 3fr 6fr;
}

.row-main-content{
    display: grid;
    grid-template-columns: 2fr 6fr;
}
.form-btn{
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding-top: 5px;
    justify-content: center;
}
   </style>
    <title>Lecturer</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <div class="main-page">
<div class="department-form">
    <div class="heading">
        <h1>Lecturers</h1>
    
   <div class="col-container">
    <div class="col-id">
        Lecturer name
        </div>
        <div class="con-name">
        Lecturer email
        </div>
   </div>
   </div>
<div class="row-main-content">
<?php
                        $sql= "SELECT * FROM lecturer";
                        $result= mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){ 
                            while($row = mysqli_fetch_assoc($result)){
                                
                                ?>
                                
                         <div class="">
                            
                                <input type="text" name="programId" value="<?php echo "  ".$row['userName']." "; ?>" id="programID" >
                            </div>

                            <div class="">
                                
                                <input type="text" name="programName" value="<?php echo "  ".$row['email']; ?>"id="programName" required>

                            </div>
                                <?php
                            }
                        }
                        
                        ?>
</div>
     <div class="form-btn">
      <div class="add-department">
     
    <a href='index.php?info=add_lecturer'>Add New</a>
    </div>
    <div class="">
             <button type="submit" name="submitres" class="button"> update</button>
     </div>
  </div>

</div>
</div>
</form>
</body>
</html>