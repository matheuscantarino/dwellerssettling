<?php
     include('../connection.php');

     //Carrega as janelas de hud
     include('../hud/dwellershud.php');
     include('../hud/boardhud.php');
     include('./chunkleft.php');

     include('dwallers.php');
     include('dwellerselect.php');
     session_start();
     $img = '../style/chars/orcicon2.png';
     $chunknum = 1;

     $_SESSION['hunter'] = 'hunter';

     $sql = "SELECT * FROM tile WHERE tilechunk = {$chunknum} AND tileid > 0 AND tileid <= 256";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($result)){
          $tilenum = $register['tilenum'];
          $tile_xaxis = $register['tile_xaxis'];
          $tile_yaxis = $register['tile_yaxis'];
          $tileid = $register['tileid'];
          $num = 2;

          if($tilenum == 1){
               $tilename = '../style/tiles/grasshaunted.png';
          }
          if($tilenum == 2){
               $tilename = '../style/tiles/wathertile.png';
          }
          if($tilenum == 3){
               $tilename = '../style/tiles/treehaunted.png';
          }
          if($tilenum == 4){
               $tilename = '../style/tiles/rockhaunted.png';
          }


          ?>
          <div class = "tile">
          <?php

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
                    }}?>  <img src="<?php echo $tilename?>" width="50"></a><?php 

               $dwallerssql = "SELECT * FROM dwellers";
               $dwallersresult = mysqli_query($conn,$dwallerssql) or die("Error returning data");
               while ($register = mysqli_fetch_array($dwallersresult)){
                    $dweller_xpos = $register['dweller_xpos'];
                    $dweller_ypos = $register['dweller_ypos'];
                    $dweller_move = $register['dweller_move'];
                    $dweller_id = $register['dweller_id'];
                    $dweller_current_pos = $register['dweller_current_pos'];
          
                    if($dweller_current_pos == $tileid){?>
                    <div class = "hunter">
                         <img src="<?php echo $img?>" width="50" height="50">
                              <div class = "selectdweller"> 
                                   <?php 
                                        include('../dwellersscript/dwellerselectscript.php');
                                   ?>
                              </div>
                    </div>     
                         <?php
                    }
               }?>
          </div>
          
          <?php 
               if(($tileid == 16) or ($tileid == 32) or ($tileid == 48) or ($tileid == 64) or ($tileid == 80) or ($tileid == 96) or ($tileid == 112) or ($tileid == 128) or ($tileid == 144) or ($tileid == 144) or ($tileid == 160) or ($tileid == 176) or ($tileid == 192) or ($tileid == 208) or ($tileid == 224) or ($tileid == 240)){
                    ?><br><?php
               }
     }
     

     //MANDAR O CURRENT POS DO PERSONAGEM PARA O DB
     //SELECIONAR O PERSONAGEM 
     //MOVEMENT == CURRENT DWELLER POSITION 
     //CURRENT DWELLERS VARS = Buscar no DB onde o dweller é igual ao id current dweller, ai tu consegue se movimentar baseado nele.
?>
<link rel="stylesheet" href="../css/index.css">
<body>
     <a href="chunkleft.php">Chunk Left</a>
     <img src="../style/backgrounds/florestbackground.png">
</body>
