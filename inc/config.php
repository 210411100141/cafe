<?php
$host="localhost";
$user="root";
$pass="";
$data="cafe";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$data);
?>