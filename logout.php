<?php 
session_start();

//mengahncurkan session ["meja"]

session_destroy();

echo "<script> alert('anda telah logout');</script>";
echo "<script> location='first.php';</script>";
 ?>