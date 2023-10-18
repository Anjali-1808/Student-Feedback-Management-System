<head>
	<link rel="stylesheet" type="text/css" href="style_change.css">
</head>
<?php 
extract($_POST);
include('../connect.php');

if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red' aling= 'center' size=3px;>Fill all the fileds first..!</font>";	
	}
	else
	{

$sql=mysqli_query($con,"select * from admin where password='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	
	$sql=mysqli_query($con,"update admin set password='$np' where email='$email'");
	
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
}

?>


<div class ="Change-form">
<form method="post" >
	<h2 align="center"> Update Password </h2>
	<hr>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Old Password</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"> Confirm Your Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"><br>
		
		<hr>
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
</div>