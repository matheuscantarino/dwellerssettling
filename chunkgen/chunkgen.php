<?php
     include('../connection.php');

     while ($tile_id_gen < 256){


     if(empty($tileid)){
          $tileid = 0;
     }
     if(empty($tile_xaxis)){
        $tile_xaxis = 0;  
     }
     if(empty($tile_yaxis)){
          $tile_yaxis = 1;  
       }

     $tilechunk = 1;


     $sql = "SELECT * FROM tile";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     
     if ($result=mysqli_query($conn,$sql))
     {
     $rowcount=mysqli_num_rows($result);
     
     while ($register = mysqli_fetch_array($result)){
          $tileid = $register['tileid'];
          $tile_xaxis = $register['tile_xaxis'];
          $tile_yaxis = $register['tile_yaxis'];
          $tile_id_gen = $register['tile_id_gen'];  //Tile id_gen é igual o tile_id, mas pode repetir.
          $tileidnew = $tile_id_gen + 1;
          if($tileidnew > 255){
               $tile_id_gen = 0;
               //header('Location: ./chunk.php');
               echo $tile_id_gen;
          }
          if($tile_xaxis >= 16){
               $tile_xaxis = 0;
               $tile_yaxis = $tile_yaxis +1;
          }
          if($tileid < 1){
               echo 'tile';
          }
     }

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


     if($tile == 1){
          $tilename = 'grasstile.png';
     }
     if($tile == 2){
          $tilename = 'wathertile.png';
     }
     if($tile == 3){
          $tilename = 'treetile.png';
     }
     if($tile == 4){
          $tilename = 'rocktile.png';
     }

     if($tileidnew == 256){
          header('Location: ./chunk.php');
     }

     //Define a coordenada do TILE

     if($tile_xaxis > 16){
          $tile_xaxis = 1;
          $tile_yaxis = $tile_yaxis +1;
     }

     $_SESSION['tile_gen'] = $tileidnew;

     $sql = "INSERT INTO tile (tilename, tilenum, tile_id_gen, tilechunk, tile_xaxis, tile_yaxis)
     VALUES ('$tilename', '$tile', '$tileidnew', '$tilechunk', '$tile_xaxis', '$tile_yaxis')";
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     }

     //while ($tileid < 50){
          //header('Location: chunkgen.php');
     //}



     }
     }

?>