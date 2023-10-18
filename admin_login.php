<!DOCTYPE html>
<html>
<head>
	<title>Admin Login page</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
</head>
<body>
	<?php
require_once("connect.php");
if(isset($_POST['create']))
{
     $email = $_POST['email'];
     $password  =$_POST['password'];

     $sql = "Select * from admin where email='$email' and password='$password'";
     $result = mysqli_query($con,$sql);
     if(mysqli_num_rows($result)>0)
     {
     	session_start();
      $_SESSION['user'] = $email;
      header("Location:adminmainpage");
     }
     else {
     	 echo '<center><font color ="cyan" size= 6px;>Invalid Username or Password</font></center>';
     
     }
     	

 

}


	?>
	<div class="Login-form">
		<form action="admin_login.php" method="post">
			<div class="container">
				
				<div class="row">
					<h1><font  face = "Monotype Corsiva">Admin Login</font></h1>
					<hr>
					<img src="images/user2.jpg"/>
					
					<input type="email" name="email" placeholder="Enter your email" required>
					
					<input type="password" name="password" placeholder="Enter your password" required>
					
					<hr>
					<input type="submit" name="create" value="Log in">
					
				</div>
				
			</div>
			
		</form>
	</div>



</body>
</html>