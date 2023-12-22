<?php
//?If we want session vairlbes used in other files each file must a session start
//?As the homepage is include in everypage it can help gathering session varible and use it else where 
//?However we do not want to start a new session as when a session exits. This destorys the session vairlbes making them useless
//*if the session already exits then don;t do anything 
if (!isset($_SESSION)) {
  //*starts a session for the user
  session_start();
}
?>
<!DOCTYPE html>
<html>
<title>Flix Fit</title>
 
<style>
    div {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: lightgrey;
    }

  #Booking_calendar_btn {
    background-color: lightgreen;
    border-color: lightgreen;
    position: relative;
    right: 80px;
  }

  #Daily_workout_btn {
    background-color: plum;
    border-color: plum;
    position: relative;
    right: 150px;
  }

  #users_btn {
    background-color: lightcoral;
    border-color: lightcoral;
    position: relative;
    right: 220px;
  }

  #create_session_btn {
    background-color: lightblue;
    border-color: lightblue;
    position: relative;
    right: 290px;
  }

  #relfection_ans_btn {
    position: relative;
    right: 360px;
  }

  #tittle {
    font-size: 20pt;
    position: relative;
    border-color: lightgrey;
    background-color: lightgrey;

  }

  #test {
    position: relative;
    right: 430px;
  }
</style>
<div>

  <form method="POST" action="Goals.php">
    <input type="submit" id="tittle" value="Flix Fit"></input>
  </form>

  <?php
  //*checks if the user is admin or not according to the DB
  
  if ($_SESSION['admin'] == 1) {
    echo 'Welcome ' . $_SESSION['user'] . '(ADMIN)' . "<br>";

  } else {
    //*if the user is not admin it will hide some functionality only the admin users should be able to see
    $welcome = 'Welcome ' . $_SESSION['user'];
    echo $welcome;

    echo "<style>
   #users_btn{
    display:none;
   }
   #create_session_btn{
    display:none;
   }
   #relfection_ans_btn{
    display:none;
   }
   </style>";

  }

  ?>
  <!-- Each set of forms relate to each button which will send them to a new page  -->
  <form method="Post" action="Booking_cal.php">
    <input type="submit" name="Booking_calendar_btn" value="Booking Calendar" id="Booking_calendar_btn">
  </form>

  <form method="Post" action="Daily_workout.php">
    <input type="submit" name="Daily_workout_btn" value="Daily Workout" id="Daily_workout_btn">
  </form>

  <form method="Post" action="users.php">
    <input type="submit" name="users_btn" value="Users" id="users_btn">
  </form>

  <form method="Post" action="reflection_ans.php">
    <input type="submit" name="relfection_ans_btn" value="Reflection answers" id="relfection_ans_btn">
  </form>

</div>


</html>