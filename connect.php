<?php
$server = "localhost";
$user="root";
$pass="";
$database="shoe2";
$conn=mysqli_connect($server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"');
?>