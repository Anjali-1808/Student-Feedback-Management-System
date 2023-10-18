<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<div class="Registration-form">
		<form action="registration.php" method="post">
			<div class="container">
				
				<div class="row">
					<h1><font  face = "verdana">REGISTER</font></h1>
					<hr>
					<img src="images/user.jpg"/>
					<input type="text" name="name" placeholder="Enter your name" required>
					<input type="text" name="icode" placeholder="Enter your ID" required>
					<input type="email" name="email" placeholder="Enter your email" required>
					
					<input type="password" name="password" placeholder="Enter your password" required>
					<input type="number" min="99999999" max="9999999999" name="mobno" placeholder="Enter your Phone No" required>
					<tr>
					<td> Programme</td>
					<Td><select name="pro" class="form-control" required>
					<option></option>
					<option>IT</option>
					<option>CE</option>
					<option>ME</option>
					<option>EE</option>
				     </select>
					</td>
				
				
					<td> Semester</td>
					<Td><select name="sem" class="form-control" required>
					<option></option>
					<option>i</option>
					<option>ii</option>
					<option>iii</option>
					<option>iv</option>
					<option>v</option>
					<option>vi</option>
					</select>
					</td>
				</tr>
					<hr>
					<input type="submit" name="create" value="Sign in">

					<a href="student_login.php"><font color="red" size="4px;">Already Register..?Log In</font>

					 </a>
					
				</div>
				
			</div>
			
		</form>
	</div>
<?php

require_once("connect.php");
if(isset($_POST['create']))
{
     $name = $_POST['name'];
     $id  =$_POST['icode'];
     $email =$_POST['email'];
     $password =$_POST['password'];
     $mobno =$_POST['mobno'];
     $pro = $_POST['pro'];
     $sem = $_POST['sem'];

     $query = "select * from student where email='$email' and password='$password' or id='$id'";
     $res = mysqli_query($con,$query);
     if(mysqli_num_rows($res)>0)
     {
       echo '<center><font color ="cyan" size= 5px;>You have Already Registered..!</font></center>';
     }
     else 
     {

     	$sql ="Insert into student(name,id,email,password,programme,semester,mobno) values('$name','$id','$email','$password','$pro','$sem','$mobno')";
        $result = mysqli_query($con,$sql);
        if($result)
       {
	      echo '<center><font color="cyan" size =5px; >You have Register successfully..!</font></center>';
       }
          else
        {
	        echo'error';

        }
      	
       }

}
else{

}




?>


</body>
</html>