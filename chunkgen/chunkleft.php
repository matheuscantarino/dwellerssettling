<?php
     include('../connection.php');
     $sql = "SELECT * FROM tile WHERE tilechunk = {$chunknum}";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($result)){

     }
?>