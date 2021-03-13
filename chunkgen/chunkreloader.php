<?php
     include('../connection.php');
     $sql = "SELECT * FROM tile";
     $result = mysqli_query($conn,$sql) or die("Error returning data"); 
     while ($register = mysqli_fetch_array($result)){
          $tile_id = $register['tileid'];
     
     }
?>