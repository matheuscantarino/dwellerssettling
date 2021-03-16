<?php
     if ($_SESSION['current_dweller'] == $dweller_id){
          ?>
               <div class = "dwellerselectboard">
                    <p><?php echo $dweller_id?></p>
               </div>
          <?php
     }
?>
<html>
     <link rel="stylesheet" href="../css/index.css">
</html>