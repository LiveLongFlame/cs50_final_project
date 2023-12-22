<?php include "Home_page.php";
 include "sql_conn.php"; ?>
<!DOCTYPE html>
<html>
<style>
   #Daily_workout_tittle {
      font-size: 20pt;
   }

   .rep_weight{
      border-radius: 50%;
      width: 34px;
      height: 34px;
      padding: 10px;
      background: #e9d2fe;
      border: #e9d2fe;
      text-align: center;
   }

   #submit_btn_daily_workout {
      background-color: #ffd480;
      border-color: #ffd480;
      width: 300pt;
      height: 30pt;
   }
   button{
      background-color: white;
      border-radius: 50%;
   }
</style>
<header id="Daily_workout_tittle">
   <center>Daily Workout</center>
</header>

<center>
   <?php
   //*Prints out the current day 
   echo date('l') . "<br>";
  
   //*Querey gets all information from the table
   $session_table = "SELECT * FROM session_test;";
   $session_table_reslut = mysqli_query($conn, $session_table);
   //*puts the relusts in assotiave array 
   $result_array = mysqli_fetch_all($session_table_reslut, MYSQLI_ASSOC);

   //*checks if the cookie is set to 0,1,2 
   //*accroding of the number change the style of the button 
   if($_COOKIE['session_num'] == 0)
   {
      echo"<style>
      #session_btn_1
      {
         background-color:orange;
         border-color:orange;
      }
      </style>";
   }
   if($_COOKIE['session_num'] == 1)
   {
      echo"<style>
      #session_btn_2
      {
         background-color:orange;
         border-color:orange;
      }
      </style>";
   }

   if($_COOKIE['session_num'] == 2)
   {
      echo"<style>
      #session_btn_3
      {
         background-color:orange;
         border-color:orange;
      }
      </style>";
   }
   ?>


<form method="POST" action="Daily_workout.php">
   <body>sessions:</body>
<button id=session_btn_1 onclick="test_1()">0</button>
<form method="POST" action="Daily_workout.php">
<button id=session_btn_2 onclick="test_2()">1</button>
<form method="POST" action="Daily_workout.php">
<button id=session_btn_3 onclick="test_3()">2   </button>
</form>
   <script>
      //*each function sets the cookie to a new value
      function test_1()
      {  
         document.cookie = "session_num=0"
      }
      function test_2()
      {
         document.cookie = "session_num=1";
      }
      function test_3()
      {
         document.cookie = "session_num=2";
      }
     
   </script>
   <form method="Post" action="reflection.php">
   <!--  accoding to the cookie value display a different exercise  -->
   <?php echo $result_array[$_COOKIE['session_num']]['Exercise_1']; ?>
   <label> rep: <input type="number" name='Ex1_rep' min="0" id="Ex1_rep" value="0" class="rep_weight"></label>
   <label>weight: <input type="number" name='Ex1_weight' min="0" id="Ex1_weight" value="0"class="rep_weight"></label><br>

   <?php echo $result_array[$_COOKIE['session_num']]['Exercise_2']; ?>
   <label> rep: <input type="number" name='Ex2_rep' min="0" id="Ex2_rep" value="0"class="rep_weight"</label>
   <label>weight: <input type="number" name='Ex2_weight' min="0" id="Ex2_weight" value="0"class="rep_weight"></label><br>

   <?php echo $result_array[$_COOKIE['session_num']]['Exercise_3']; ?>
   <label> rep: <input type="number" name='Ex3_rep' min="0" id="Ex2_rep" value="0"class="rep_weight"></label>
   <label>weight: <input type="number" name='Ex3_weight' min="0" id="Ex2_weight" value="0"class="rep_weight"></label><br>

      <input type="submit" name="submit_daily_workout" value="Submit" id="submit_btn_daily_workout">
   </form>

</center>


</html>