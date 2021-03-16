<?php
     include('../connection.php');
     $pageid = $_GET['id'];
     session_start();
     $sql = "SELECT * FROM tile WHERE tileid = '{$pageid}'";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     //$dweller_current = 1;
     while ($register = mysqli_fetch_array($result)){
          $tileid = $register['tileid'];
          $tile_xaxis = $register['tile_xaxis'];
          $tile_yaxis = $register['tile_yaxis'];
          $_SESSION['current_pos'] = $tileid;
          $current_pos = $tileid;
          $dweller_xpos = $tile_xaxis;
          $dweller_ypos = $tile_yaxis;


               //Atualiza posição do Dweller
               $dwellerpossql = "UPDATE dwellers SET dweller_xpos = '{$dweller_xpos}' WHERE dweller_id = '{$_SESSION['current_dweller']}'";
                    if ($conn->query($dwellerpossql) === TRUE) {
                         echo "Record updated successfully";
                         } else {
                         echo "Error updating record: " . $conn->error;
                    }
               $dwellerpossql = "UPDATE dwellers SET dweller_ypos = '{$dweller_ypos}' WHERE dweller_id = '{$_SESSION['current_dweller']}'";
                    if ($conn->query($dwellerpossql) === TRUE) {
                         echo "Record updated successfully";
                         } else {
                         echo "Error updating record: " . $conn->error;
                    }
               $dwellerpossql = "UPDATE dwellers SET dweller_current_pos = '{$current_pos}' WHERE dweller_id = '{$_SESSION['current_dweller']}' ";
                    if ($conn->query($dwellerpossql) === TRUE) {
                         echo "Record updated successfully";
                         } else {
                         echo "Error updating record: " . $conn->error;
                    }
     }
     header('Location: chunk.php');
?>