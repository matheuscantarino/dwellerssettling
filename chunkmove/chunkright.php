<?php
     include('../connection.php');
     session_start();

     $_SESSION['chunknum'] = $_SESSION['chunknum'];

     $chunkcurrent_sql = "SELECT * FROM chunk WHERE chunk_num = '{$_SESSION['chunknum']}'";
     $chunkcurrent_result = mysqli_query($conn,$chunkcurrent_sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($chunkcurrent_result)){
          $chunkcurrent_xaxis = $register['chunk_xaxis'];
          $chunkcurrent_yaxis = $register['chunk_yaxis'];
          $chunkcurrent_num = $register['chunk_num'];

          $chunk_right_travel_x = $chunkcurrent_xaxis + 1;
          $chunk_right_travel_y = $chunkcurrent_yaxis;

          //echo $chunk_left_travel_x;

          //O SESSION DO CURRENT CHUNK ESTÁ FALTANDO
     }

     $chunkright_sql = "SELECT * FROM chunk WHERE chunk_xaxis = '{$chunk_right_travel_x}'";
     $chunkright_result = mysqli_query($conn,$chunkright_sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($chunkright_result)){
          $chunkcurrent_xaxis = $register['chunk_xaxis'];
          $chunkcurrent_yaxis = $register['chunk_yaxis'];
          $chunkcurrent_num = $register['chunk_num'];
          $_SESSION['chunknum'] = $chunkcurrent_num;

          echo $chunkcurrent_num;
          echo 'segundo funcionando';
          header('Location: ../chunkgen/chunk.php');
     }

     
?>