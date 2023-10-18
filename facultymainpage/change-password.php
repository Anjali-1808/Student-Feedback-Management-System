<head>
	<link rel="stylesheet" type="text/css" href="style_change.css">
</head>
<?php 
extract($_POST);
include('../connect.php');

if(isset($save))
{

	

$sql=mysqli_query($con,"select * from fa where password='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	
	$sql=mysqli_query($con,"update fa set password='$np' where email='$email'");
	
	$err="<font color='blue' aling= 'center' size=3px;>Password successfully updated </font>";
	}
	else
	{
	$err="<font color='red' aling= 'center' size=3px;> Password does not matched ..! </font>";
	}
}

else
{

$err="<font color='red'aling= 'center' size=3px; >Wrong Old Password..! </font>";

}

}

?>


<div class ="Change-form">
<form method="post" >

	<h2 align="center"> Update Password </h2>
	
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	<input type="password" name="op" placeholder="Enter Old Password" required>
					<input type="password" name="np" placeholder="Enter New Password" required>
					<input type="password" name="cp" placeholder="Enter Confirm Password" required>
	
	      
	
	
		
		<hr>
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
</div>