<?php
$tile_ca = mt_rand(1, 100);{
     if ($tile_ca <= 50){
          $tile_ca = 1;
}
     if(($tile_ca > 50) && ($tile_ca <= 75)){
          $tile_ca = 2;
}
     if(($tile_ca > 75) && ($tile_ca <= 90)){
          $tile_ca = 3;
}
     if(($tile_ca > 90) && ($tile_ca <= 100)){
          $tile_ca = 4;
}
}
?>