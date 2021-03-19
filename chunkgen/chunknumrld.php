<?php
     session_start();
     $_SESSION['chunknum'] = 1;
     header('Location: ./chunk.php');
?>