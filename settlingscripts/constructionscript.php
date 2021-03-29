<?php
     include('../connection.php');
?>
<link rel="stylesheet" href="../css/index.css">
          <div class = "constructionscript">
               <h2>SELECT STRUTURE</h2>
               <div class = "constructionicon">
                    <?php 
                         $construction_sql = "SELECT * FROM tile WHERE tilechunk = {$_SESSION['chunknum']} AND tileid > 0 AND tileid <= 256";
                         $construction_result = mysqli_query($conn,$construction_sql) or die("Error returning data");
                         while ($register = mysqli_fetch_array($construction_result)){
                         }
                    ?>
                    <a href="../settlingscripts/">
                         <img src="../style/icons/constructionicon.png" width="40" height="40">
                    </a>
               </div>
     </div>