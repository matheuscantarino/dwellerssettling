<?php
     $vel = 1;

     if(($dwaller_xpos + $vel <= $tile_xpos) or ($dwaller_xpos - $vel >= $tile_xpos)){
          echo 'X ok';
     }
     if($dwaller_xpos - $vel >= $tile_xpos){
          echo 'X ok';
     }

     if(($dwaller_xpos + $vel <= $tile_xpos) or ($dwaller_xpos - $vel >= $tile_xpos)){    ?>
          <a href = "tile.php?id=<?php echo $tileid; ?>"> <?php 
     }?>  <img src="<?php echo $tilename?>" width="50"></a>

<?php
     if((($dweller_xpos + $dweller_move >= $tile_xaxis) or ($dweller_xpos - $dweller_move >= $tile_yaxis)) && (($dweller_ypos + $dweller_move >= $tile_yaxis) or ($dweller_ypos - $dweller_move >= $tile_yaxis)))     {    ?>
          <a href = "tile.php?id=<?php echo $tileid; ?>"> <?php 
     }?>  <img src="<?php echo $tilename?>" width="50"></a>
<?php 

if((($dweller_xpos + $dweller_move >= $tile_xaxis) || ($tile_xaxis + $dweller_move <= $dweller_xpos)))

     if((($dweller_xpos + $dweller_move >= $tile_xaxis) or ($dweller_xpos - $dweller_move >= $tile_yaxis)) && (($dweller_ypos + $dweller_move >= $tile_yaxis) or ($dweller_ypos - $dweller_move >= $tile_yaxis)))     {    ?>
          <a href = "tile.php?id=<?php echo $tileid; ?>"> <?php 
     }?>  <img src="<?php echo $tilename?>" width="50"></a>

