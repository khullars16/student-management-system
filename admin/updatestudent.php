<?php
include "header.php";
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

      <div class="col-sm-4">

        <form action="updatestudent.php" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="standard">Standard</label>
              <input type="number" min="1" placeholder="Enter Standard" class="form-control" name="standard" required>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="name">Student Name</label>
              <input type="text" placeholder="Enter Student Name" class="form-control" name="stuname">
            </div>
          </div>



          <div class="form-row">
            <input type="submit" name="submit" class="form-control w-50 mx-auto" value="Search">
          </div>


        </form>

      </div>
      <div class="col-sm-8">
        <table class="table table-bordered">
          <thead>
            <th>SNo</th>
            <th>Name</th>
            <th>Standard</th>
            <th>Roll No</th>
            <th>City</th>
            <th>Contact</th>
            <th>Action</th>
          </thead>

          <tbody>
          <?php

          if(isset($_POST['submit']))
          {
            $std = $_POST['standard'];
            $name = $_POST['stuname'];
            $sql = "SELECT * from student WHERE standard = '$std' AND name LIKE '%$name%'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) < 1)
            {
              echo "no result found";
            }
            else
            {
              $count = 0;
              while($data = mysqli_fetch_assoc($result))
              {
                $count++;
              ?>
              <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $data["name"]; ?></td>
                <td><?php echo $data["standard"]; ?></td>
                <td><?php echo $data["rollno"]; ?></td>
                <td><?php echo $data["city"]; ?></td>
                <td><?php echo $data["pcont"]; ?></td>
                <td><a href="updateform.php?sid=<?php echo $data['id']; ?>" class="btn btn-sm" name="edit">Edit</a></td>
              </tr>
              <?php
            }
}
          }

          ?>
</tbody>

        </table>
      </div>
    </div>
  </div>
</body>
</html>
