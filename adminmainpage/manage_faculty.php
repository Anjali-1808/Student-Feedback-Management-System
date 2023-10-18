<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style_manage.css">
</head>




<div class="manage-form">
	<h2 align="center">LIST OF Faculty </h2>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
					<th>S.No</th>
	                <th>Name</th>
	                <th>Email</th>
	                
	                <th>Programme</th>
	                <th>Semester</th>
	                <th>Course</th>
	                <th>Mobile</th>
	                <th>Edit</th>
	                <th>Delete</th>
	            </tr>
	 </thead>
	 <tbody>

	 	<?php
 include("../connect.php");

  
	

	$i=1;
	$que=mysqli_query($con,"select * from fa");
    
	
	while($row=mysqli_fetch_array($que))
	{

		?>
	<tr>
	 		<td><?php echo $i;?></td>
	 		<td><?php echo $row['name'];?></td>
	 		<td><?php echo $row['email'];?></td>
	 		
	 		<td><?php echo $row['programme'];?></td>
	 		<td><?php echo $row['semester'];?></td>
	 		<td><?php echo $row['Course'];?></td>
	 		<td><?php echo $row['mobile'];?></td>
	 		<td><a href="#" ><i class="fas fa-edit"></i></a></td>
	 		<td><a href="#" ><i class="fas fa-trash"></i></a></td>
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