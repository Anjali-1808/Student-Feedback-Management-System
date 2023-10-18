<head>
  <link rel="stylesheet" type="text/css" href="style_form.css">
</head>
<div class="form">
  <?php
  include('../connect.php');

if(!isset($_SESSION['email'])){
  header('location:../student_login.php');
}
$email = $_SESSION['email'];

$sql = "Select * from student where email='$email'";
$result = mysqli_query($con,$sql);
$users = mysqli_fetch_assoc($result);
$sem = $users['semester'];

if($sem == "vi")
{
 echo '<a href="Alumini_feedback.php">Give Alumini Feedback </a><br>';
}
  ?>

 
 <a href="program_feedback.php">Give Program Feedback</a><br>
 <a href="Faculty_feedback.php">Give Institue Faculty Feedback</a><br>
 <a href ="Courses_feedback.php">Give Courses Feedback</a><br>
 <a href= "Attainment_feedback.php">Give Attainment Feedback</a>


 

 
</div>
