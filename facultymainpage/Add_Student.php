<head>
	<link rel="stylesheet" type="text/css" href="style_add.css">
</head>
<?php
require_once("../connect.php");
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
       $err = "<font size = 4px; color =blue;>This student is already register..!</font>";
     }
     else 
     {

     	$sql ="Insert into student(name,id,email,password,programme,semester,mobno) values('$name','$id','$email','$password','$pro','$sem','$mobno')";
        $result = mysqli_query($con,$sql);
        if($result)
       {
	      $err = "<font size = 4px; color = green;>Student Register successfully..!</font>";
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
					<h2 align="center"><font  face = "verdana">Add Student</font></h2>

					
		        <div class="col-sm-4"><?php echo @$err;?></div>
	             </div>
					
				
					<input type="text" name="name" placeholder="Enter Student name" required>
					<input type="text" name="icode" placeholder="Enter Student ID" required>
					<input type="email" name="email" placeholder="Enter Student email" required>
					
					<input type="password" name="password" placeholder="Enter password for Student " required>
					<input type="number" min="99999999" max="9999999999"  name="mobno" placeholder="Enter Student Phone No" required>
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


