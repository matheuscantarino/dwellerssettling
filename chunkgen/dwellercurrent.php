<?php
     include('../connection.php');
     session_start();
     $dweller_select_id = $_GET['id'];
     $_SESSION['current_dweller'] = $dweller_select_id;
     header('Location: ./chunk.php')
?>