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

          $chunk_left_travel_x = $chunkcurrent_xaxis - 1;
          $chunk_left_travel_y = $chunkcurrent_yaxis;

          //echo $chunk_left_travel_x;

          //O SESSION DO CURRENT CHUNK ESTÁ FALTANDO
     }

     $chunkleft_sql = "SELECT * FROM chunk WHERE chunk_xaxis = '{$chunk_left_travel_x}'";
     $chunkleft_result = mysqli_query($conn,$chunkleft_sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($chunkleft_result)){
          $chunkcurrent_xaxis = $register['chunk_xaxis'];
          $chunkcurrent_yaxis = $register['chunk_yaxis'];
          $chunkcurrent_num = $register['chunk_num'];
          $_SESSION['chunknum'] = $chunkcurrent_num;

          //echo $chunkcurrent_num;
          //echo 'segundo funcionando';
          $dweller_xpos_new = $_SESSION['$dweller_xpos_m'] + 15;
          $dweller_ypos_new = $_SESSION['$dweller_ypos_m'];
          $dweller_current_pos_new = $_SESSION['dweller_current_pos_m'] + 15;
          $dweller_chunk_new = $_SESSION['dweller_chunk_m'] - 1;

          $chunkleft_dwellerpos_sql = "UPDATE dwellers SET dweller_current_pos = '{$dweller_current_pos_new}' WHERE dweller_id = '{$_SESSION['current_dweller']}'";
          if ($conn->query($chunkleft_dwellerpos_sql) === TRUE) {
               } else {
          }
          $dweller_xpos_sql = "UPDATE dwellers SET dweller_xpos = '{$dweller_xpos_new}' WHERE dweller_id = '{$_SESSION['current_dweller']}'";
          if ($conn->query($dweller_xpos_sql) === TRUE) {
               } else {
          }
          $dweller_chunk_sql = "UPDATE dwellers SET dweller_chunk = '{$dweller_chunk_new}' WHERE dweller_id = '{$_SESSION['current_dweller']}'";
          if ($conn->query($dweller_chunk_sql) === TRUE) {
               } else {
          }

          header('Location: ../chunkgen/chunk.php');
     }

     
?>