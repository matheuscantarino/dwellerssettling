<?php
     session_start();
     $_SESSION['dweller_chunk_m'] = 1;
     $_SESSION['chunknum'] = 1;
     header('Location: ./chunk.php');
?>