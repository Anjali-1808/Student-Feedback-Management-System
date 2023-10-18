<?php

require_once('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<link rel="stylesheet" type="text/css" href="css/style6.css">
</head>
<body>

      <div class="Contact-form">
		<form action="contact.php" method="post">
			<div class="container">
				
				<div class="row">
					<h1><font  face = "verdana">Contact Us</font></h1>
					<hr>
					
					<input type="text" name="name" placeholder="Enter your name" required>
					<input type="text" name="icode" placeholder="Enter your ID" required>
					<input type="email" name="email" placeholder="Enter your email" required>
					<input type="Intger" name="mobno" placeholder="Enter your Phone No" required>

					<textarea name="msg" class="form-control" placeholder="Write a Message" required></textarea>
					<hr>
					<input type="submit" name="create" value="Send">
					
				</div>
				
			</div>
			
		</form>
	</div>
<?php
    require_once('connect.php');

if(isset($_POST['create']))
{
	$name = $_POST['name'];
	$id =$_POST['icode'];
	$email =$_POST['email'];
	$mobno = $_POST['mobno'];
	$message = $_POST['msg'];

$sql="Insert into contact(name,id,email,mobno,message)values('$name','$id','$email','$mobno','$message')";
        $result = mysqli_query($con,$sql);
        if($result)
       {
	      echo '<center><font color="cyan" size =5px; >Your message has been sent..!</font></center>';
       }
       else
       {
       	echo 'error';
       }
          
}

?>

</body>
</html>

