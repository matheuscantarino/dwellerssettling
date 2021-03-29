<?php
     include('../connection.php');
     //$_SESSION['current_management_hud'] = 'constructionhud';
     //header('Location: /dwellerssettling/chunkgen/chunk.php');
                    $construction_sql = "SELECT * FROM constructbuild WHERE construction_status = 'ative'";
                    $construction_result = mysqli_query($conn,$construction_sql) or die("Error returning data");
                    while ($register = mysqli_fetch_array($construction_result)){
                    
                    }
               ?>
<link rel="stylesheet" href="../css/index.css">
     <div class = "constructionhud">  
          <div class = "constructionbackicon">
               <a href="../headers/managementhudheader.php"><</a>
          </div>
     </div>