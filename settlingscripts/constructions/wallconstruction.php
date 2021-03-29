<?php
     session_start();
     $_SESSION['construction_name'] = 'wall';

     header('Location: /dwellerssettling/chunkgen/chunk.php');
?>