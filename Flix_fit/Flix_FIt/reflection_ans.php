<?php
include "Home_page.php";
include "sql_conn.php";

//*gets data from user db
$sql = "SELECT * FROM users ;";
$reslut = mysqli_query($conn, $sql);
$name = mysqli_fetch_all($reslut, MYSQLI_ASSOC);
//*gets data from user_workout_result db
$session_query = "SELECT * FROM user_workout_result";
$session_query_result = mysqli_query($conn, $session_query);
$reslut_check = mysqli_num_rows($session_query_result);

?>
<!DOCTYPE html>
<html>
<style>
  #reflection_ans_tittle {
    font-size: 20pt;
  }

  .users_btn0 {
    float: left;
    background-color: white;
  }

  .users_btn1 {
    float: left;
    background-color: white;
  }

  .users_btn2 {
    float: left;
    background-color: white;
  }

  .users_btn3 {
    float: left;
    background-color: white;
  }

  .space {
    width: 45%;
    float: left;
    background-color: white;
  }

  #center {
    color: white;
  }
</style>
<header id="reflection_ans_tittle">
  <center>Reflection Answers</center>
</header>

<!-- Emtpy div to help with allgin buttuns in the center next to eachother -->
<div class="space"><a id='center'>i</a></div>
<center>
  <?php
  //*Creates an empty array
  $temp_array = array();
  //*goes through each user on the db and push them to a index array instead of an assotaive array
//?This is due to later one cannot push assotaive array name into a button name
  for ($i = 0; $i < count($name); $i++) {
    array_push($temp_array, $name[$i]['name']);
  }

  $num = -1;
  //*Goes through each user and creates a new button for each user to use
  for ($j = 0; $j < count($temp_array); $j++) {
    $num = $num + 1;
    echo "
  <div class='users_btn$num'>
  <form method='Post' action='reflection_ans.php'>
  <button onclick='btn$num()'>$temp_array[$j]</button></form></div>
  ";

  }
  ?>
  <br><br>
  <?php

  if ($reslut_check > 0) {
    while ($row = mysqli_fetch_assoc($session_query_result)) {
      //*if the cookie that is unqie to each user is equal to the id of the user then fetch that users information 
      if ($_COOKIE['user'] == $row['id_users']) {
        echo "Session Number: " . $row['session_id'] . "<br>";
        echo "Exercise 1 reps: " . $row['Exercise_1_rep'] . "   Exercise 1 weight: " . $row['Exercise_1_weight'] . "<br>";
        echo "Exercise 2 reps: " . $row['Exercise_2_rep'] . "   Exercise 2 weight: " . $row['Exercise_2_weight'] . "<br>";
        echo "Exercise 3 reps: " . $row['Exercise_3_rep'] . "   Exercise 3 weight: " . $row['Exercise_3_weight'] . "<br>";
        echo "Reflection Question 1: " . $row['reflection_Q1'] . "<br>";
        echo "Reflection Question 2: " . $row['reflection_Q2'] . "<br>";
        echo "Notes: " . $row['reflection_notes'] . "<br>" . "<br>";

      }

    }
  }

  ?>
</center>


<script>
//*each function sets the user cookie to the assgined value
//*this allows for easy idfencation for each user
  function btn0() {
    document.cookie = "user=0";
  }
  function btn1() {
    document.cookie = "user=1";
  }
  function btn2() {
    document.cookie = "user=2";
  }
  function btn3() {
    document.cookie = "user=3";
  }

</script>

</html>