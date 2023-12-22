<?php 
include "Home_page.php";
include "sql_conn.php"; 
?>
<!DOCTYPE html>
<html> 
   <style>
      #tittle_user{
         
         font-size: 20pt;
      }

   </style>
<center><header id ="tittle_user">Users</header></center><br>

</html>


<center>
<?php
//*Gets all data from the users table 
$sql = "SELECT * FROM users ;";
$reslut = mysqli_query($conn, $sql);
//*puts the sql query results in a assoctaive array
$name = mysqli_fetch_all($reslut,MYSQLI_ASSOC);

//*for loop goes through each row in the name colloum and echos out the information
for($i=0;$i < count($name);$i++)
{
   echo $name[$i]['name']."<br>";
}
?>
</center>