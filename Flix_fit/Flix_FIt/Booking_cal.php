<?php
include "Home_page.php";
include "sql_conn.php";
//*Fetchs the current day of month 
$Current_month = date('F') . "<Br>";
//*Uses sql query and fetchs all the information from the db
$day = "SELECT * FROM calender;";
//*Connects to the sql db and puts through the query
$reslut = mysqli_query($conn, $day);
//*Fetchs the information and puts in a assotative array 
$time = mysqli_fetch_all($reslut, MYSQLI_ASSOC);
//*Fetchs the validtion for the time file
include "time_validtion.php";
?>
<!DOCTYPE html>
<html>
   <!-- Gathers all the functionalitys for the buttons that is in a seprate file -->
<script src="btn_functionallity.js"></script>
<!-- Sets the style of each button and creates a table format with black lines  -->
<style>
   table,
   th,
   td {
      border: 1px solid black;
   }

   button {
      background-color: lightgreen;
      border-color: lightgreen;
   }

   #Month {
      font-size: 45px
   }

   #calender_btn {
      background-color: lightsalmon;
      border-color: lightsalmon;
      width: 50pt;
      height: 25pt;

   }

   #test {
      background-color: lightgreen;
      border-color: lightgreen;
   }

   #submit {
      background-color: lightsalmon;
      border-color: lightsalmon
   }

   #submit_btn {
      background-color: lightsalmon;
      border-color: lightsalmon;
      width: 50pt;
      height: 25pt;
   }
</style>
<center>
   <!-- Prints out the current month -->
   <header id="Month">
      <?php echo $Current_month ?>
   </header>
</center>
<center>
   <!-- creates table and inside each row is php code accessing the assotative array that was set and fetchs the information from their -->
   <table>
      <tr>
         <th>Sunday</th>
         <th>Monday</th>
         <th>Tuesday</th>
         <th>Wednesday</th>
         <th>Thursday</th>
         <th>Friday</th>
         <th>Saturday</th>
      </tr>

      <tr>
         <!-- Each onclick realtes to a js function  -->
         <td><button id="btn1" onclick="btn1()">
               <?php echo $time[0]['Sunday'] ?>
            </button></td>
         <td><button id="btn2" onclick="btn2()">
               <?php echo $time[0]['Monday'] ?>
            </button></td>
         <td><button id="btn3" onclick="btn3()">
               <?php echo $time[0]['Tuesday'] ?>
            </button></td>
         <td><button id="btn4" onclick="btn4()">
               <?php echo $time[0]['Wednesday'] ?>
            </button></td>
         <td><button id="btn5" onclick="btn5()">
               <?php echo $time[0]['Thursday'] ?>
            </button></td>
         <td><button id="btn6" onclick="btn6()">
               <?php echo $time[0]['Friday'] ?>
            </button></td>
         <td><button id="btn7" onclick="btn7()">
               <?php echo $time[0]['Saturday'] ?>
            </button></td>


      </tr>

      <tr>
         <td><button id="btn8" onclick="btn8()">
               <?php echo $time[1]['Sunday'] ?>
            </button></td>
         <td><button id="btn9" onclick="btn9()">
               <?php echo $time[1]['Monday'] ?>
            </button></td>
         <td><button id="btn10" onclick="btn10()">
               <?php echo $time[1]['Tuesday'] ?>
            </button></td>
         <td><button id="btn11" onclick="btn11()">
               <?php echo $time[1]['Wednesday'] ?>
            </button></td>
         <td><button id="btn12" onclick="btn12()">
               <?php echo $time[1]['Thursday'] ?>
            </button></td>
         <td><button id="btn13" onclick="btn13()">
               <?php echo $time[1]['Friday'] ?>
            </button></td>
         <td><button id="btn14" onclick="btn14()">
               <?php echo $time[1]['Saturday'] ?>
            </button></td>
      </tr>


   </table>
</center>


<form method="Post" action="Booking_cal.php">
   <center><button id="submit_btn" onclick="submit()">submit</button>
      <center>
</form>

<?php
//*for admin users only they get to display a buttons which allows to set all the cookies to 0 by calling a js function
if ($_SESSION['admin'] == 1) {
   echo "<button id='cookie_0' onclick='clear_time()'>Reset Calendar </button>";
}

?>
<script>
   //*sets all the cookies to 0
   function clear_time() {
      document.cookie = "btn1_select =0";
      document.cookie = "btn2_select =0";
      document.cookie = "btn3_select =0";
      document.cookie = "btn4_select =0";
      document.cookie = "btn5_select =0";
      document.cookie = "btn6_select =0";
      document.cookie = "btn7_select =0";
      document.cookie = "btn8_select =0";
      document.cookie = "btn9_select =0";
      document.cookie = "btn10_select =0";
      document.cookie = "btn11_select =0";
      document.cookie = "btn12_select =0";
      document.cookie = "btn13_select =0";
      document.cookie = "btn14_select =0";
   }
</script>

</html>