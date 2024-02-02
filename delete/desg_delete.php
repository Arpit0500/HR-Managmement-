<?php
    
    include "../dbcon.php";
    $desg_id = $_GET['desg_id'];
    $sql = "DELETE from designation where desg_id = '$desg_id'";
    $delete = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if($delete)
    {
        mysqli_close($conn);
        header("location:../org/designation.php");
        exit;
    }
    else
    {
        echo "Error deleting record";
    }

?>