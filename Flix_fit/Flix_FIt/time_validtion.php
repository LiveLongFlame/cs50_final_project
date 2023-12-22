<?php
//?This file checks the cookies and the db and is able to change information from the sql db
//*checks if the number in the data base is either 0 or 1
if ($time[0]['Booked_sun'] != 0) {
//* if it is 1 then it changes the style of the button 
   echo "<style>
   #btn1{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   $
   </style>";

}
//*checks if the cookie is 0 or 1 
if ($_COOKIE['btn1_select'] != 0) {
   //*the sql query sets the values to 1 where apporite in the db
   $select_sql_sun = "UPDATE `calender` SET `Booked_sun` ='1' WHERE `calender`.`Calender_id` = 0;";
   //*sends query to the db
   $select_sql_sun_result = mysqli_query($conn, $select_sql_sun);
   //*changes the style of the button accroding to what is says on the db
   echo "<style>
   #btn1{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

} else {
   //*if the cookie is 0 then changes the set values to 0 
   $de_select_sql_sun = "UPDATE `calender` SET `Booked_sun` ='0' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_sun_result = mysqli_query($conn, $de_select_sql_sun);

}

//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[0]['Booked_mon'] != 0) {

   echo "<style>
   #btn1{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

}

if ($_COOKIE['btn2_select'] != 0) {

   $select_sql_mon = "UPDATE `calender` SET `Booked_mon` ='1' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_mon_result = mysqli_query($conn, $select_sql_mon);
   echo "<style>
   #btn2{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

} else {
   $de_select_sql_mon = "UPDATE `calender` SET `Booked_mon` ='0' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_mon_reslut = mysqli_query($conn, $de_select_sql_mon);

}

//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[0]['Booked_tue'] != 0) {

   echo "<style>
   #btn3{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

}

if ($_COOKIE['btn3_select'] != 0) {

   $select_sql_tue = "UPDATE `calender` SET `Booked_tue` ='1' WHERE `calender`.`Calender_id` = 0;";
   $select_sql_tue_result = mysqli_query($conn, $select_sql_tue);
   echo "<style>
   #btn3{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

} else {
   $de_select_sql_tue = "UPDATE `calender` SET `Booked_tue` ='0' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_tue_result = mysqli_query($conn, $de_select_sql_tue);

}

//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[0]['Booked_wed'] != 0) {

   echo "<style>
   #btn4{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

}

if ($_COOKIE['btn4_select'] != 0) {

   $select_sql_wed = "UPDATE `calender` SET `Booked_wed` ='1' WHERE `calender`.`Calender_id` = 0;";
   $select_sql_wed_result = mysqli_query($conn, $select_sql_wed);
   echo "<style>
   #btn4{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

} else {
   $de_select_sql_wed = "UPDATE `calender` SET `Booked_wed` ='0' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_tue_result = mysqli_query($conn, $de_select_sql_wed);

}

//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[0]['Booked_thur'] != 0) {

   echo "<style>
   #btn5{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

}

if ($_COOKIE['btn5_select'] != 0) {

   $select_sql_thur = "UPDATE `calender` SET `Booked_thur` ='1' WHERE `calender`.`Calender_id` = 0;";
   $select_sql_thur_result = mysqli_query($conn, $select_sql_thur);
   echo "<style>
   #btn5{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

} else {
   $de_select_sql_thur = "UPDATE `calender` SET `Booked_thur` ='0' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_thur_result = mysqli_query($conn, $de_select_sql_thur);

}

//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[0]['Booked_fri'] != 0) {

   echo "<style>
   #btn6{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

}

if ($_COOKIE['btn6_select'] != 0) {

   $select_sql_fri = "UPDATE `calender` SET `Booked_fri` ='1' WHERE `calender`.`Calender_id` = 0;";
   $select_sql_fri_result = mysqli_query($conn, $select_sql_fri);
   echo "<style>
   #btn6{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

} else {
   $de_select_sql_fri = "UPDATE `calender` SET `Booked_fri` ='0' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_fri_result = mysqli_query($conn, $de_select_sql_fri);

}

//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[0]['Booked_sat'] != 0) {

   echo "<style>
   #btn7{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
 
   </style>";

}

if ($_COOKIE['btn7_select'] != 0) {

   $select_sql_sat = "UPDATE `calender` SET `Booked_sat` ='1' WHERE `calender`.`Calender_id` = 0;";
   $select_sql_sat_result = mysqli_query($conn, $select_sql_sat);
   echo "<style>
   #btn7{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
 
   </style>";

} else {
   $de_select_sql_sat = "UPDATE `calender` SET `Booked_sat` ='0' WHERE `calender`.`Calender_id` = 0;";
   $de_select_sql_sat_result = mysqli_query($conn, $de_select_sql_sat);

}

//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[1]['Booked_sun'] != 0) {

   echo "<style>
   #btn8{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

}

if ($_COOKIE['btn8_select'] != 0) {

   $select_sql_sun = "UPDATE `calender` SET `Booked_sun` ='1' WHERE `calender`.`Calender_id` = 1;";
   $select_sql_sun_result = mysqli_query($conn, $select_sql_sun);
   echo "<style>
   #btn8{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

} else {
   $de_select_sql_sun = "UPDATE `calender` SET `Booked_sun` ='0' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_sun_result = mysqli_query($conn, $de_select_sql_sun);

}
//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[1]['Booked_mon'] != 0) {

   echo "<style>
   #btn9{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

}

if ($_COOKIE['btn9_select'] != 0) {

   $select_sql_mon = "UPDATE `calender` SET `Booked_mon` ='1' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_mon_result = mysqli_query($conn, $select_sql_mon);
   echo "<style>
   #btn9{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

} else {
   $de_select_sql_mon = "UPDATE `calender` SET `Booked_mon` ='0' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_mon_reslut = mysqli_query($conn, $de_select_sql_mon);

}
//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[1]['Booked_tue'] != 0) {

   echo "<style>
   #btn10{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

}

if ($_COOKIE['btn10_select'] != 0) {

   $select_sql_tue = "UPDATE `calender` SET `Booked_tue` ='1' WHERE `calender`.`Calender_id` = 1;";
   $select_sql_tue_result = mysqli_query($conn, $select_sql_tue);
   echo "<style>
   #btn10{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

} else {
   $de_select_sql_tue = "UPDATE `calender` SET `Booked_tue` ='0' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_tue_result = mysqli_query($conn, $de_select_sql_tue);

}
//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[1]['Booked_wed'] != 0) {

   echo "<style>
   #btn11{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

}

if ($_COOKIE['btn11_select'] != 0) {

   $select_sql_wed = "UPDATE `calender` SET `Booked_wed` ='1' WHERE `calender`.`Calender_id` = 1;";
   $select_sql_wed_result = mysqli_query($conn, $select_sql_wed);
   echo "<style>
   #btn11{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

} else {
   $de_select_sql_wed = "UPDATE `calender` SET `Booked_wed` ='0' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_tue_result = mysqli_query($conn, $de_select_sql_wed);

}
//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[1]['Booked_thur'] != 0) {

   echo "<style>
   #btn12{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

}

if ($_COOKIE['btn12_select'] != 0) {

   $select_sql_thur = "UPDATE `calender` SET `Booked_thur` ='1' WHERE `calender`.`Calender_id` = 1;";
   $select_sql_thur_result = mysqli_query($conn, $select_sql_thur);
   echo "<style>
   #btn12{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
  
   </style>";

} else {
   $de_select_sql_thur = "UPDATE `calender` SET `Booked_thur` ='0' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_thur_result = mysqli_query($conn, $de_select_sql_thur);

}
//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[1]['Booked_fri'] != 0) {

   echo "<style>
   #btn13{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

}

if ($_COOKIE['btn13_select'] != 0) {

   $select_sql_fri = "UPDATE `calender` SET `Booked_fri` ='1' WHERE `calender`.`Calender_id` = 1;";
   $select_sql_fri_result = mysqli_query($conn, $select_sql_fri);
   echo "<style>
   #btn13{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
   
   </style>";

} else {
   $de_select_sql_fri = "UPDATE `calender` SET `Booked_fri` ='0' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_fri_result = mysqli_query($conn, $de_select_sql_fri);

}
//#______________________________________________________________________________________________________
//#______________________________________________________________________________________________________
if ($time[1]['Booked_sat'] != 0) {

   echo "<style>
   #btn14{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
 
   </style>";

}

if ($_COOKIE['btn14_select'] != 0) {

   $select_sql_sat = "UPDATE `calender` SET `Booked_sat` ='1' WHERE `calender`.`Calender_id` = 1;";
   $select_sql_sat_result = mysqli_query($conn, $select_sql_sat);
   echo "<style>
   #btn14{
      background-color: lightgray;
      border-color: lightgray;
      pointer-events: none;
   }
 
   </style>";

} else {
   $de_select_sql_sat = "UPDATE `calender` SET `Booked_sat` ='0' WHERE `calender`.`Calender_id` = 1;";
   $de_select_sql_sat_result = mysqli_query($conn, $de_select_sql_sat);

}
?>