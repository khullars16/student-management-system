<?php
include "dbcon.php";
session_start();
if(!isset($_SESSION['uid']))
{
  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if($row < 1)
    {
      echo "<script>alert('Username or Password not Matched');
      window.open('login.php', '_self');</script>";
    }
    else
    {
      $data = mysqli_fetch_assoc($result);
      $id = $data['id'];
      echo "id=".$id;
      $_SESSION['uid'] = $id;
      echo "<script>window.open('admin/admindash.php', '_self')</script>";
    }
  }
}
else{
    echo "<script>window.open('admin/admindash.php', '_self')</script>";
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
    <!-- <div>
    <h3 class="text-right"><a href="login.php">Admin Login</a></h5>
  </div> -->
  <div class="text-center">
    <h1>Admin Login</h1>
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <form action="login.php" method="post" class="mt-5">

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" placeholder="Enter Username" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" placeholder="Enter Password" class="form-control" name="password">
        </div>
        <input type="submit" value="Login" name="login">
      </form>
    </div>
    <div class="col-sm-4"></div>
  </div>

</div>
</body>
</html>
