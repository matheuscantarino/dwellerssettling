<?php
     include('../connection.php');

     $img = '../style/chars/char.png';
     $chunknum = 1;

     $sql = "SELECT * FROM tile WHERE tilechunk = {$chunknum}";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($result)){
          $tilenum = $register['tilenum'];
          $tile_xaxis = $register['tile_xaxis'];
          $tile_yaxis = $register['tile_yaxis'];
          $tileid = $register['tileid'];
          $num = 2;

     $dwallerssql = "SELECT * FROM dwellers";
     $dwallersresult = mysqli_query($conn,$dwallerssql) or die("Error returning data");
     while ($register = mysqli_fetch_array($dwallersresult)){
          $dweller_xpos = $register['dweller_xpos'];
          $dweller_ypos = $register['dweller_ypos'];
          $dweller_move = $register['dweller_move'];
          $dweller_current_pos = $register['dweller_current_pos'];

          if($dweller_current_pos == $tileid){?>
               <img src="<?php echo $img?>" width="2"><?php
          }
     }
     }
?>