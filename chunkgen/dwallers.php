<?php
     include('../connection.php');

     $dwallerssql = "SELECT * FROM dwellers";
     $dwallersresult = mysqli_query($conn,$dwallerssql) or die("Error returning data");
     while ($register = mysqli_fetch_array($dwallersresult)){
          $dweller_xpos = $register['dweller_xpos'];
          $dweller_ypos = $register['dweller_ypos'];
          $dweller_move = $register['dweller_move'];
          $dweller_current_pos = $register['dweller_current_pos'];
     }
?>