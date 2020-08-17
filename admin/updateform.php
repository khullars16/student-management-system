<?php
include "header.php";
$sid = $_GET['sid'];

$sql = "SELECT * FROM student WHERE id = '$sid'";
$run = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($run);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Student Details</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <a href="admindash.php" class="btn btn-primary mr-auto">Back to Dashboard</a>
      <a href="../logout.php" class="btn btn-primary ml-auto">Logout</a>
    </div>

    <div class="row mt-5">
      <h1 class="mx-auto">Welcome To Admin Dashboard</h1>
    </div>

    <div class="row mt-5">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">

        <form action="updatedata.php" method="post" enctype="multipart/form-data">
          <div class="form-row">


              <input type="hidden" value="<?php echo $data['id']; ?>"  name="id">


            <div class="form-group col-md-6">
              <label for="roll">Roll No</label>
              <input type="text" value="<?php echo $data['rollno']; ?>" class="form-control" name="roll" required>
            </div>

            <div class="form-group col-md-6">
              <label for="name">Full Name</label>
              <input type="text" value="<?php echo $data['name']; ?>" class="form-control" name="fullname" required>
            </div>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">City</label>
              <input type="text" value="<?php echo $data['city']; ?>" class="form-control" name="city" required>
            </div>

            <div class="form-group col-md-6">
              <label for="phone">Parents Contact No</label>
              <input type="text" value="<?php echo $data['pcont']; ?>" class="form-control" name="phone" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="std">Standard</label>
              <input type="text" value="<?php echo $data['standard']; ?>" class="form-control" name="std">
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
