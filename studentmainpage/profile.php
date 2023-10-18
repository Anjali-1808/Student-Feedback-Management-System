<head>
	<link rel="stylesheet" type="text/css" href="style_profile.css">
</head>
<?php
extract($_POST);
include('../connect.php');


session_start();
if(!isset($_SESSION['email'])){
	header('location:../student_login.php');
}
if(isset($update))
{
	$query="update student set name='$n',id='$i',email='$e',mobno='$mob' where email='".$_SESSION['email']."'";
	mysqli_query($con
		,$query);
	$err="<font color='blue'>Profie updated successfully !!</font>";
}

$email = $_SESSION['email'];
$sql = "Select * from student where email='$email'";
$result = mysqli_query($con,$sql);
$users = mysqli_fetch_assoc($result);


?>



    <div class="profile-form">
		<form method="post">
			<table class="table table-bordered">
				<h2 align="center">Update Your Profile</h2>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input class="form-control" value="<?php echo $users['name'];?>"  type="text" name="n"/></td>
				</tr>

				<tr>
					<td>Enter Your ICode</td>
					<Td><input class="form-control" value="<?php echo $users['id'];?>"  type="text" name="i"/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $users['email'];?>"  name="e"/></td>
				</tr>
				
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input class="form-control" type="number" min="99999999" max="9999999999" value="<?php echo $users['mobno'];?>"  name="mob"/></td>
				</tr>
				
				
				
			<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</div>
	
