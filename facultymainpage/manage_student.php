<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style_manage.css">
</head>




<div class="manage-form">
	<h2 align="center">LIST OF STUDENT </h2>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
					<th>S.No</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Id</th>
	                <th>Programme</th>
	                <th>Semester</th>
	                <th>Mobile</th>
	                <th>Update</th>
	                <th>Delete</th>
	            </tr>
	 </thead>
	 <tbody>

	 	<?php
 include("../connect.php");

  
	

	$i=1;
	$que=mysqli_query($con,"select * from student");
    
	
	while($row=mysqli_fetch_array($que))
	{

		?>
		
	<tr>
            
	 		<td><?php echo $i;?></td>
	 		<td ><div contenteditable><?php echo $row['name'];?></div></td>
	 		<td ><div contenteditable><?php echo $row['email'];?></td>
	 		<td ><div contenteditable><?php echo $row['id'];?></td>
	 		<td ><div contenteditable><?php echo $row['programme'];?></td>
	 		<td ><div contenteditable><?php echo $row['semester'];?></td>
	 		<td ><div contenteditable><?php echo $row['mobno'];?></td>
	 
	 		<td><a href="#" ><i class="fas fa-edit"></i></a></td>
	 		<td><i class="fas fa-trash"></i></td>

	 	</tr>
	 

	 	<?php

	 	$i++;
	 }
	 	?>
	 </tbody>
			</table>
		</div>
	</div>
	</div>