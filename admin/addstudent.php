<?php
include "header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Student Details</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <a href="admindash.php" class="btn btn-primary mr-auto">Back to Dashboard</a>
      <a href="logout.php" class="btn btn-primary ml-auto">Logout</a>
    </div>

    <div class="row mt-5">
      <h1 class="mx-auto">Welcome To Admin Dashboard</h1>
    </div>

    <div class="row mt-5">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">

        <form action="addstudent.php" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="roll">Roll No</label>
              <input type="text" placeholder="Enter Roll No" class="form-control" name="roll" required>
            </div>

            <div class="form-group col-md-6">
              <label for="name">Full Name</label>
              <input type="text" placeholder="Enter Name" class="form-control" name="fullname" required>
            </div>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">City</label>
              <input type="text" placeholder="Enter City" class="form-control" name="city" required>
            </div>

            <div class="form-group col-md-6">
              <label for="phone">Parents Contact No</label>
              <input type="text" placeholder="Parents Contact No" class="form-control" name="phone" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="std">Standard</label>
              <input type="text" placeholder="Standard" class="form-control" name="std">
            </div>

            <div class="form-group col-md-6">
              <label for="">Image</label>
              <input type="file" class="form-control" name="smig">
            </div>
          </div>
          <div class="form-row">
            <input type="submit" name="submit" class="form-control w-50 mx-auto">
          </div>


        </form>

      </div>
      <div class="col-sm-3"></div>

    </div>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $rollno = $_POST['roll'];
  $name = $_POST['fullname'];
  $city = $_POST['city'];
  $pcon = $_POST['phone'];
  $std = $_POST['std'];
  $imagename = $_FILES['smig']['name'];
  $tempname = $_FILES['smig']['tmp_name'];

  move_uploaded_file($tempname, "../dataimg/$imagename");

  $query = "INSERT into student(rollno, name, city, pcont, standard, image) VALUES('$rollno', '$name', '$city', '$pcon', '$std', '$imagename')";
  $run = mysqli_query($conn, $query);

  if($run == true) {
    echo "<script>alert('data entered successfully')</script>";
  }
  else {
    {echo "<script>alert('error')</script>";}
  }


}

?>
