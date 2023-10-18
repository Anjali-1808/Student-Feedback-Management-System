<?php
include('../connect.php');
$email = $_GET['email'];
$query = "delete from fa where email=$email";
$result = mysqli_query($con,$query);
header('location:manage_faculty.php');

?>