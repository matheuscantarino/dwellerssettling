<?php
     include('../connection.php');
     $dwallers_chunkchange_sql = "SELECT * FROM dwellers WHERE dweller_id = '{$_SESSION['current_dweller']}'";
     $dwallers_chunkchange_result = mysqli_query($conn,$dwallers_chunkchange_sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($dwallers_chunkchange_result)){
          $dweller_current_pos_chunkchange = $register['dweller_current_pos'];
     }
?>
<html>
     <link rel="stylesheet" href="../css/index.css">
     <div class = "chunktravel">
     <?php
          if($dweller_current_pos_chunkchange == 16){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 32){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 48){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 64){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 96){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 112){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 128){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 144){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 160){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 176){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 192){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 208){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 224){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 256){
               echo '>';
          }
          if($dweller_current_pos_chunkchange == 240){
               echo '>';
          }
     ?>
     </div>
</html>