<?php
include "dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="container">
    <div>
      <h3 class="text-right"><a href="login.php">Admin Login</a></h5>
    </div>
    <div class="text-center">
      <h1>Welcome to Student Management System</h1>
    </div>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <form action="" method="post" class="my-5">
          <div class="form-group">
            <h2>Student information</h2>
          </div>
          <div class="form-group">
            <label for="standard">Standard</label>
            <select name="std" id="" class="form-control">
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
              <option value="4">4th</option>
              <option value="5">5th</option>
              <option value="6">6th</option>
              <option value="7">7th</option>
              <option value="8">8th</option>
              <option value="9">9th</option>
              <option value="10">10th</option>
            </select>
          </div>
          <div class="form-group">
            <label for="roll">Roll No</label>
            <input type="text" placeholder="Enter Student Roll No" class="form-control" name="rollno">
          </div>
          <input type="submit" value="Submit" name="submit">
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>



    <?php

    if (isset($_POST['submit'])) {
      $standard = $_POST['std'];
      $roll = $_POST['rollno'];

      $sql = "SELECT * from student WHERE rollno = '$roll' AND standard = '$standard'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    ?>
        <div class="row border p-3 my-5">
          <div class="col-md-3"><img height="250px" width="250px" src="dataimg/<?php echo $data['image']; ?>" alt=""></div>
          <div class="col-md-9">
            <table class=table table-bordered>
              <thead class="text-center">
                <tr>
                  <th colspan="3">Student Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <th>Roll No</th>
                  <td><?php echo $data['rollno']; ?></td>
                </tr>
                <tr>
                  <th>Name</th>
                  <td><?php echo $data['name']; ?></td>
                </tr>
                <tr>
                  <th>Standard</th>
                  <td><?php echo $data['standard']; ?></td>
                </tr>
                <tr>
                  <th>contact No</th>
                  <td><?php echo $data['pcont']; ?></td>
                </tr>
                <tr>
                  <th>City</th>
                  <td><?php echo $data['city']; ?></td>
                </tr>
              </tbody>


            </table>
          </div>

        </div>



    <?php
      } else {
        echo "<script>alert('no data found')</script>";
      }
    }


    ?>




  </div>
</body>

</html>