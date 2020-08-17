<?php
include "header.php";


$id = $_REQUEST['sid'];
$query = "DELETE from student WHERE id = '$id'";
$run = mysqli_query($conn, $query);
if($run == true)
{
  ?>
  <script>alert("Data Deleted successfully");
window.open("deletestudent.php", "_self");
  </script>
  <?php
}

?>
