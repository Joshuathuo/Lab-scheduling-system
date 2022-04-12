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
    <div class="heading"><h1>Add new Department</h1></div>
  <form action="add_deparmentAction.php" method="post">
                    <div class="main__form">
                        <div class="form__content">
                            <div class="first__name content">
                                <label for="fname">Department name</label><br>
                                <input type="text" name="departmentName" id="derpname" required>
                            </div>

                            <div class="first__name content">
                                <label for="facultyId">Faculty ID</label><br>
                                <input type="text" name="faculty" id="faculty" required>
                            </div>
                        </div>
                        <div class="submit__btn ">
                            <button type="submit" class="main__btn">Add</button>
                        </div>
                    </div>
                </form>
  </div>
</div>  
</body>
</html>