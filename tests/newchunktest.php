<?php

     include('connection.php');

     $tilenum = 10;

     $tile = mt_rand(1, 100);{
          if ($tile <= 50){
               $tile = 1;
     }
          if(($tile > 50) && ($tile <= 75)){
               $tile = 2;
     }
          if(($tile > 75) && ($tile <= 90)){
               $tile = 3;
     }
          if(($tile > 90) && ($tile <= 100)){
               $tile = 4;
     }
     }