<?php
include('../connect.php');
	
	
	
	mysqli_query($con,"delete from student where id=''");
	header('location:index.php?info=manage_student');
?>