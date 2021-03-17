<?php
     session_start();
     $tilechunk = $_SESSION['chunknum'] + 1;
     echo $tilechunk;
?>