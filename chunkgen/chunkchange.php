<?php
     include('../connection.php');
     $dwallers_chunkchange_sql = "SELECT * FROM dwellers WHERE dweller_id = '{$_SESSION['current_dweller']}'";
     $dwallers_chunkchange_result = mysqli_query($conn,$dwallers_chunkchange_sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($dwallers_chunkchange_result)){
          $dweller_current_pos_chunkchange = $register['dweller_current_pos'];
          $dweller_xpos_chunkchange = $register['dweller_xpos'];
          $dweller_ypos_chunkchange = $register['dweller_ypos'];
          $dweller_id_chunkchange = $register['dweller_id'];
     
?>
<html>
     <link rel="stylesheet" href="../css/index.css">
          <div class = "chunktravel16x">
          <?php
               if($dweller_current_pos_chunkchange == 16){
                    ?>
                         <a href="../chunkmove/chunkleft.php">></a>
                    <?php
               }
          
          ?>
          </div>
          <div class = "chunktravel16y">
          <?php
               if($dweller_current_pos_chunkchange == 16){
                    ?>
                         <a href="../chunkmove/chunktop.php">></a>
                    <?php
               }
          
          ?>
          </div>
     <?php
     }
     ?>
</html>