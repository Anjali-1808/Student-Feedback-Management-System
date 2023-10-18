<?php
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" href="style_feedback.css">
</<head>

<div class ="content">
<div class="Feedback-form">
<form method="post">
  <fieldset>

  <center><u><h3>FEEDBACK FORM</h3></u></center><br>
 
<fieldset>



<h3>Please give your answer about the following question by circling the given grade on the scale:</h3>


<button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Excellent 5</button>
<button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Good 4</button>
<button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Satisfactory 3</button>
<button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px"> Average 2</button>
<button type="button" style="font-size:7pt;color:white;background-color:red;border:2px solid #336600;padding:3px">Need Improvement 1</button><br>



<center><h3>Program Feedback</h3></center>
<table class="table table-bordered">
  <tr>
<td>
1. Rate the quality of lectures of different courses</td>
<td>
<input type="radio" name="quest1" value="5" required> 5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3"> 3
<input type="radio" name="quest1" value="2">2
<input type="radio" name="quest1" value="1">1</td>
</tr>

<tr>
  <tr>
<td>
2. Do you feel this program adequately prepared you for the next step in the career?</td>
<td>
<input type="radio" name="quest2" value="5" required> 5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3"> 3
<input type="radio" name="quest2" value="2">2
<input type="radio" name="quest2" value="1">1</td>
</tr>


  


<tr>
<td>
3. Rate appropiateness of contents of the different courses(up to date).</td>
<td>
<input type="radio" name="quest3" value="5" required> 5
  <input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3"> 3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>
</tr>

<tr>
<td>
4. Inputs recived from the program for effective Communication.</td>
<td>
<input type="radio" name="quest4" value="5" required> 5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3"> 3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1</td>
</tr>
<tr>
<td>
5. Rate the life skills development programs conducted by department.</td>
<td>
<input type="radio" name="quest5" value="5" required> 5
  <input type="radio" name="quest5" value="4">4
  <input type="radio" name="quest5" value="3"> 3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>
</tr>
<tr>
<td>
6. Overall rating for fullfillment of your expectations from this program.</td>
<td>
<input type="radio" name="quest6" value="5" required> 5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3"> 3
<input type="radio" name="quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>
</tr>
<tr>
<td>
7. Rate the adequacy of theory and practical contents in curriculum.</td>
<td>
<input type="radio" name="quest7" value="5" required> 5
  <input type="radio" name="quest7" value="4">4
  <input type="radio" name="quest7" value="3"> 3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1</td>
</tr>
</table>



8. Suggestion , for overall improvement of department/Institute , if any?</b><br><br>
<center>
<textarea name="quest8" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center><br><br>


<p align="center"><button type="submit" style="font-size:7pt;color:white;background-color:brown;border:2px solid #336600;padding:7px" name="sub">Submitt</button></p>


</form>
</fieldset>


</form>
</fieldset>
</div>
</div>
<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
  
  </div><!--close site_content-->   
  
    
    </div><!--close main-->
  </form>
<center>
<?php 
include('../connect.php');

$email =$_SESSION['email'];

$sql = "Select * from student where email='$email'";
$result = mysqli_query($con,$sql);
$users = mysqli_fetch_assoc($result);

if(isset($_POST['sub']))
{
  $quest1 =$_POST['quest1'];
$quest2 = $_POST["quest2"];
$quest3 = $_POST["quest3"];
$quest4 = $_POST["quest4"];
$quest5 = $_POST["quest5"];
$quest6 = $_POST["quest6"];
$quest7 = $_POST["quest7"];
$quest8 = $_POST["quest8"];


$user_id = $users['id'];

$sql=mysqli_query($con,"select * from program_feedback where student_id='$user_id' and student_email='$email'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback..! </h2>";
}
else{
  $query="Insert into program_feedback values('$user_id','$email','$quest1','$quest2','$quest3','$quest4',
'$quest5','$quest6','$quest7','$quest8')";

$result = mysqli_query($con,$query);
if($result)
{

echo "<h2 style='color:green'>Thank you </h2>";
}
else
{
  
}

}


}
?>