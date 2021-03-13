<?php
     include('../connection.php');
     include('chunkgen.php');

     if($tileidnew == 1){
          $tile_xasis = 1;
          $tile_yasis = 1;
     }

     $sql = "INSERT INTO tile (tile_xaxis, tile_yaxis)
     VALUES ('$tile_xaxis', '$tile_yaxis')";
     
     if (mysqli_query($conn, $sql)) {
          echo 'ok';
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
?>