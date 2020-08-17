<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <a href="../logout.php" class="btn btn-primary ml-auto">Logout</a>
    </div>

    <div class="row mt-5">
      <h1 class="mx-auto">Welcome To Admin Dashboard</h1>
    </div>

    <div class="row bg-danger pt-5 pb-5 text-center mt-5">
      <div class="col-sm-3"><a href="addstudent.php"><button class="btn btn-lg">Add Student</button></a></div>
      <div class="col-sm-3"><a href="viewstudent.php"><button class="btn btn-lg">View Student</button></a></div>
      <div class="col-sm-3"><a href="updatestudent.php"><button class="btn btn-lg">Update Student</button></a></div>
      <div class="col-sm-3"><a href="deletestudent.php"><button class="btn btn-lg">Delete Student</button></a></div>
    </div>
  </div>
</body>
</html>
