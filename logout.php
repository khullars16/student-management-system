<?php
include "header_out.php";
session_destroy();
echo "<script>window.open('login.php', '_self')</script>";
?>
