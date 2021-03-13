<?php
     include('../connection.php');

     $deletereg = "SELECT * FROM tile";
     $deleteresult = mysqli_query($conn,$deletereg) or die("Error returning data");
     $deletecont = mysqli_num_rows($deleteresult);

        $sql = "DELETE FROM tile";

        if (mysqli_query($conn, $sql)) {
             header('Location: chunkgen.php');
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }
?>