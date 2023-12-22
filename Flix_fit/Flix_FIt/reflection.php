<?php include "Home_page.php"; ?>
<!DOCTYPE html>
<html> 

<style>
#reflection_tittle{
   font-size: 20pt;
}
#reflection_btn{
   background-color: lightsalmon;
   border-color: lightsalmon;
}
</style>

<center><header id="reflection_tittle">Reflection</header></center>
<form method="POST" action="text.php">
<body>
   Question 1:<br>
<input type="radio" name="ques_1" value="1" >1
<input type="radio" name="ques_1" value="2">2
<input type="radio" name="ques_1" value="3">3
<input type="radio" name="ques_1" value="4">4
<input type="radio" name="ques_1" value="5"checked="True">5
</body>

<body>
   <br><br>Question 2:<br>
<input type="radio" name="ques_2" value="1">1
<input type="radio" name="ques_2" value="2">2
<input type="radio" name="ques_2" value="3">3
<input type="radio" name="ques_2" value="4">4
<input type="radio" name="ques_2" value="5"checked="True">5
</body>
<br><br>
<label>Notes:</label><br>
<input type="text" name="notes" required='True' style="height:200px; width:200px" >

<br><br><input type="submit" name="reflection_submit_btn" value="Submit" id="reflection_btn" >
</form>  
<?php 

//*sets  users input to the session values
$_SESSION['session_name']= $_COOKIE['session_num'];
$_SESSION['Ex1_rep'] =$_POST['Ex1_rep'];
$_SESSION['Ex1_weight']=$_POST['Ex1_weight'];

$_SESSION['Ex2_rep'] =$_POST['Ex2_rep'];
$_SESSION['Ex2_weight']=$_POST['Ex2_weight'];

$_SESSION['Ex3_rep'] =$_POST['Ex3_rep'];
$_SESSION['Ex3_weight']=$_POST['Ex3_weight'];

?>






</html>