<head>
	<link rel="stylesheet" type="text/css" href="style_add.css">
</head>
<?php
require_once("../connect.php");
if(isset($_POST['create']))
{
     $name = $_POST['name'];
     $email =$_POST['email'];
     $password =$_POST['password'];
     $course = $_POST['course'];

     $mobno =$_POST['mobno'];
     $pro = $_POST['pro'];
     $sem = $_POST['sem'];
     

     $query = "select * from fa where email='$email' and password='$password' or course='$course'";
     $res = mysqli_query($con,$query);
     if(mysqli_num_rows($res)>0)
     {
       $err = "<font size = 4px; color =blue;>This Faculty is already register..!</font>";
     }
     else 
     {

     	$sql ="Insert into fa(name,email,password,programme,semester,Course,mobile) values('$name','$email','$password','$pro','$sem','$course','$mobno')";
        $result = mysqli_query($con,$sql);
        if($result)
       {
	      $err = "<font size = 4px; color = green;>Faculty Register successfully..!</font>";
       }
          else
        {
	        $err ='error';

        }
      	
       }

}
else{

}
?>

<div class="Add-form">
		<form  method="post">
			<div class="container">
				
				<div class="row">
					<h2 align="center"><font  face = "verdana">Add Faculty</font></h2>

					
		        <div class="col-sm-4"><?php echo @$err;?></div>
	             </div>
					
				
					<input type="text" name="name" placeholder="Enter Faculty name" required>
					<input type="text" name="email" placeholder="Enter Faculty email" required>
					
					<input type="password" name="password" placeholder="Enter password for Faculty " required>
					
					<input type="text"  name="course" placeholder="Enter Faculty Course" required>
					<input type="number" min="99999999" max="9999999999" name="mobno" placeholder="Enter Faculty Mobile no" required>

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
					</tr>
						<tr>
				
				
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


					
             <input type="submit" name="create" value="Sign in">

					
					
				</div>
				
			</div>
			
		</form>
	</div>


