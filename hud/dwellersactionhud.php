<?php
     include('../connection.php');
?>
<html>
     <link rel="stylesheet" href="../css/index.css">
     <div class = "dwellersactionhud">
          <?php
               $dwellers_hud_sql = "SELECT * FROM dwellers WHERE dweller_id = '{$_SESSION['current_dweller']}'";
               $dwellers_hud_result = mysqli_query($conn,$dwellers_hud_sql) or die("Error returning data");
                    while ($register = mysqli_fetch_array($dwellers_hud_result)){
                    
                    $dweller_name = $register['dweller_name'];
                    $dweller_profession_icon = $register['dweller_profession_icon'];

                    ?>

                    <h2>
                         <?php echo $dweller_name ?>
                    </h2>

                    <div class = "professionactionbk">
                         <img src="<?php echo $dweller_profession_icon ?>" width="40" height="40">
                    </div>
                    <?php
               }
          ?>
     </div>
</html>