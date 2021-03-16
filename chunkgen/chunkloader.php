<?php
     include('../connection.php');
     $curret_chunk_xaxis = 1;
     $curret_chunk_yaxis = 3;

     $sql = "SELECT * FROM chunk WHERE chunk_xaxis = '{$curret_chunk_xaxis}' AND chunk_yaxis = '{$curret_chunk_yaxis}' ";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     $rowcount=mysqli_num_rows($result);
     echo $rowcount;
     while ($register = mysqli_fetch_array($result)){

     }
?>