<?php
include "Goals.php";
include "sql_conn.php";
//*defines are vairlbes as sql cannot take array information 
$Q1= $_POST["ques_1"];
$Q2=$_POST["ques_2"];
$notes= $_POST["notes"];
$user_id = $_SESSION['user_id'];
$session_num = $_SESSION['session_name'];
$Ex1_rep = $_SESSION['Ex1_rep'];
$Ex1_weight =$_SESSION['Ex1_weight'];
$Ex2_rep = $_SESSION['Ex2_rep'];
$Ex2_weight =$_SESSION['Ex2_weight'];
$Ex3_rep = $_SESSION['Ex3_rep'];
$Ex3_weight =$_SESSION['Ex3_weight'];

//*interts data to the table accoridng to the users input 
$sql1 = "INSERT INTO `user_workout_result` (`id_users`,`session_id`,`Exercise_1_rep`,`Exercise_1_weight`,`Exercise_2_rep`,`Exercise_2_weight`,`Exercise_3_rep`,`Exercise_3_weight`, `reflection_Q1`, `reflection_Q2`, `reflection_notes`) 
VALUES ('$user_id','$session_num','$Ex1_rep','$Ex1_weight','$Ex1_rep','$Ex1_weight','$Ex1_rep','$Ex1_weight', '$Q1', '$Q2', '$notes');";
$reslut1 = mysqli_query($conn, $sql1);






?>