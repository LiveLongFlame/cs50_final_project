<?php
//*creates a new session for each user 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //*Sets session varibles to the user name and password 
  $_SESSION['user'] = $_POST['User_name_input'];
  $_SESSION['password'] = $_POST['Password_input'];


  //*this function takes in the user name and password and checks if they are correct or not 
  function check_user($user_name, $user_password)
  {
    //*fetchs the connection to the sql data base
    include "sql_conn.php";
    //*creates hyperlink for users to click and get sent back to home page 
    $link = "<a href='index.php'>Login page</a>";
    //*creates a query in sql lanuge
    $sql = "SELECT * FROM users;";
    //*sends the query to sql
    $reslut = mysqli_query($conn, $sql);
    //*fetchs the number of rows in the sql database
    $reslut_check = mysqli_num_rows($reslut);

    //*checks if  the number of rows in the table is greater than 0 
    //?if the number of rows is less than 0, meaing there is no table
    if ($reslut_check > 0) {
      //*Fetchs the results of the data base and puts it in a assotaive array
      //*While loop goes throw all the data in the row 
      //?row[Collom number]['row name']
      while ($row = mysqli_fetch_assoc($reslut)) {
        //*checks if the user name and password are the same with the db table 
        if ($user_name == $row['name'] && $user_password == $row['pwd']) {
          //*When the username and pwd are correct creates session vairble and assgins to the users spefic information specifed by the row 
          $_SESSION['goal'] = $row['Goals'];
          $_SESSION['admin'] = $row['Admin'];
          $_SESSION['user_id'] = $row['id_users'];
          //*sends users to the goal page
          include "Goals.php";
        }

        
      }
    }


  }


  echo check_user($_SESSION['user'], $_SESSION['password']);


}


?>