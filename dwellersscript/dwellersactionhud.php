<?php
     session_start();
     include('../connection.php');

     $dwellers_hud_sql = "SELECT * FROM dwellers WHERE dweller_id = '{$_SESSION['current_dweller']}'";
     $dwellers_hud_result = mysqli_query($conn,$dwellers_hud_sql) or die("Error returning data");
          while ($register = mysqli_fetch_array($dwellers_hud_result)){
          
          $dweller_profession = $register['dweller_profession'];
          echo $dweller_profession;

     }
?>