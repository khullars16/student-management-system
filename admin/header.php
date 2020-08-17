<?php
include "../dbcon.php";
  session_start();
  if(isset($_SESSION['uid']))
  {
    echo "";
  }
  else
  {
    echo "<script>window.open('../login.php', '_self')</script>";
  }
?>
