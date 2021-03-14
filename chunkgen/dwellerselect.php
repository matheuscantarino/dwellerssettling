<?php
     include('../connection.php');

     $current_dweller = 2;

     $dwallers_move_sql = "SELECT * FROM dwellers WHERE dweller_id = '{$current_dweller}'";
               $dwallers_move_result = mysqli_query($conn,$dwallers_move_sql) or die("Error returning data");
               while ($register = mysqli_fetch_array($dwallers_move_result)){

               $dweller_xpos_m = $register['dweller_xpos'];
               $dweller_ypos_m = $register['dweller_ypos'];
               $dweller_move_m = $register['dweller_move'];
               $dweller_id_m = $register['dweller_id'];
               $dweller_current_pos_m = $register['dweller_current_pos'];

               if (($tile_xaxis + $dweller_move_m >= $dweller_xpos_m && $tile_xaxis - $dweller_xpos_m <= $dweller_move_m ) &&
                    ($tile_yaxis + $dweller_move_m >= $dweller_ypos_m && $tile_yaxis - $dweller_ypos_m <= $dweller_move_m ))
                    {   ?>
                         <a href = "tile.php?id=<?php echo $tileid; ?>"> <?php 
                    }}?>  <img src="<?php echo $tilename?>" width="40"></a>
?>