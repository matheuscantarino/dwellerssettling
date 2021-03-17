<?php
     include('../connection.php');
     $_SESSION['current_dweller'] = 1;

     $dwallers_move_sql = "SELECT * FROM dwellers";
     $dwallers_move_result = mysqli_query($conn,$dwallers_move_sql) or die("Error returning data");
?>
<html>
     <link rel="stylesheet" href="../css/index.css">
     <body>
          <div class = "dwellerslist">
          <?php
               while ($register = mysqli_fetch_array($dwallers_move_result)){

               $dweller_name = $register['dweller_name'];
               $dweller_xpos = $register['dweller_xpos'];
               $dweller_ypos = $register['dweller_ypos'];
               $dweller_move = $register['dweller_move'];
               $dweller_id = $register['dweller_id'];
               $dweller_current_pos = $register['dweller_current_pos'];

               ?>
                    <a href="dwellercurrent.php?id=<?php echo $dweller_id; ?>"><br><?php echo $dweller_name . '&nbsp' . '-' . '&nbsp' . $dweller_id?></a> 
               <?php 
               }
          ?>
          </div>
     </body>
</html>