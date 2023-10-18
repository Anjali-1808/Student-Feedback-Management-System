<head>
	
	<link rel="stylesheet" type="text/css" href="style_message.css">
</head>




<div class="manage-form">
	<h2 align="center">Messages From Student</h2>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
					<th>S.No</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Id</th>
	                <th>Mobile</th>
	                <th>Message</th>
	               
	            </tr>
	 </thead>
	 <tbody>

	 	<?php
 include("../connect.php");

  
	

	$i=1;
	$que=mysqli_query($con,"select * from contact");
    
	
	while($row=mysqli_fetch_array($que))
	{

		?>
	<tr>
	 		<td><?php echo $i;?></td>
	 		<td><?php echo $row['name'];?></td>
	 		<td><?php echo $row['email'];?></td>
	 		<td><?php echo $row['id'];?></td>
	 		<td><?php echo $row['mobno'];?></td>
	 		
	 		<td><?php echo $row['message'];?></td>
	 		
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