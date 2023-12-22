<!DOCTYPE html>
<html lang="en">
<!-- Sets the style of the buttons like colour,size etc. -->
<style>
   #Login_btn {
      background-color: lightblue;
      border-color: lightblue;
   }

   #title {
      font-size: 30pt;
      font-style: Helvetica;
   }

   input {
      width: 250pt;
   }

   #Login_btn {
      width: 50pt;
      height: 25pt;
   }
</style>
<script>
   //*Sets cookie default value
   //?System better explained in the "Booking_cal.php" page
   document.cookie = "btn1_select=0";
   document.cookie = "btn2_select=0";
   document.cookie = "btn3_select=0";
   document.cookie = "btn4_select=0";
   document.cookie = "btn5_select=0";
   document.cookie = "btn6_select=0";
   document.cookie = "btn7_select=0";
   document.cookie = "btn8_select=0";
   document.cookie = "btn9_select=0";
   document.cookie = "btn10_select=0";
   document.cookie = "btn11_select=0";
   document.cookie = "btn12_select=0";
   document.cookie = "btn13_select=0";
   document.cookie = "btn14_select=0";

   document.cookie = "session_num=0";
   document.cookie = "user=-1";
  
</script>
<title>Flix Fit</title>
<center>
   <header id="title">Flix Fit</header>
</center><br>

<!-- After the user inputs their information in the text box the form will be sent to validation page in which the system checks if users is valid -->
<form method="Post" action="Login_validation.php">
   <center>
      <label>User Name: <input type="text" name="User_name_input" required="True" id="user"></label><br><br>
      <label>Password: <input type="text" name="Password_input" required="True" id="pwd"></label><br><br>
      <input type="submit" name="login_btn" value="Login" id="Login_btn">
   </center>
</form>

</html>