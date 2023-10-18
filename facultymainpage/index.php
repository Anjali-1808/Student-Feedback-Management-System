<?php
include('../connect.php');
session_start();
if(!isset($_SESSION['user'])){
	header('location:../faculty_login.php');
}
$email = $_SESSION['user'];

$sql = "Select * from fa where email='$email'";
$result = mysqli_query($con,$sql);
$users = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Faculty Dashboard</title>
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
	 <a href="#"><i class="fas fa-comment-dots"></i><span> Feedback</span></a>
	 <a href="index.php?page=Messages"><i class="fas fa-envelope"></i><span> Messages</span></a>
	
	
	<a href="index.php?page=Add_Student"><i class="fas fa-plus-circle"></i><span> Add Student</span></a>
	<a href="index.php?page=manage_student"><i class="fas fa-tasks"></i><span> Manage Student</span></a>

	
    <a href="index.php?page=change-password"><i class="fas fa-user-lock"></i><span> Change Password</span></a>


	 	
	 </div>
     <div class="content">
     	
     	 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="change-password")
			{
				include('change-password.php');
			
			}
			if($page =="Add_Student")
			{
				include('Add_Student.php');
			}
			if($page =="manage_student")
			{
				include('manage_student.php');
			}
			if($page =="Messages")
			{
				include('Messages.php');
			}
		   }
		
			?>
		</div>
     </div>
</body>
</html>