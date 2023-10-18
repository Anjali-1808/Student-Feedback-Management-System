<?php
include('../connect.php');
session_start();
if(!isset($_SESSION['email'])){
	header('location:../student_login.php');
}
$email = $_SESSION['email'];

$sql = "Select * from student where email='$email'";
$result = mysqli_query($con,$sql);
$users = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<input type="checkbox" id ="check">

	 <header>

	 	<label for="check">
	 		<i class="fas fa-bars" id="sidebar_btn"></i>
	 	</label>
	 	<div class="left-area">
          <h3>Hello <span><?php echo $users['name']; ?></span></h3>

      </div>
     <div class="right-area">

     	<a href="logout.php" class="logout-btn">Logout</a>
     	
     </div>


	 </header>
	 <div class="sidebar">

	 	<center>
	 		<img src="../images/user4.jpg">

	 	</center>
	<a href="#"><i class="fas fa-desktop"></i><span> Dashboard</span></a>
	<a href="#"><i class="fas fa-user"></i><span> Profile</span></a>
	
	<a href="#"><i class="fas fa-comment-dots"></i><span> Feedback</span></a>
	<a href="change-password.php"><i class="fas fa-user-lock"></i><span> Change Password</span></a>

	
</body>
</html>