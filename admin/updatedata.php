<?php
include "header.php";

  $rollno = $_POST['roll'];
  $name = $_POST['fullname'];
  $city = $_POST['city'];
  $pcon = $_POST['phone'];
  $std = $_POST['std'];
  $id = $_POST['id'];
  $imagename = $_FILES['smig']['name'];
  $tempname = $_FILES['smig']['tmp_name'];

  move_uploaded_file($tempname, "../dataimg/$imagename");

  $query = "UPDATE student SET rollno = '$rollno', name = '$name', city = '$city', pcont = '$pcon', standard = '$std', image = '$imagename' WHERE id = '$id'";
  $run = mysqli_query($conn, $query);

  if($run == true) {
    ?>
    <script>
          alert('data updated successfully');
          window.open('updatestudent.php', '_self');
          </script>;
          <?php
  }
  else {
    {echo "<script>alert('error')</script>";}
  }




?>
