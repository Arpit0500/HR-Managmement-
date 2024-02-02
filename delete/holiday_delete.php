<?php
    
    include "../dbcon.php";
    $srno = $_GET['srno'];
    $sql = "DELETE from holiday where srno = '$srno'";
    $delete = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if($delete)
    {
        mysqli_close($conn);
        header("location:../leave/holiday.php");
        exit;
    }
    else
    {
        echo "Error deleting record";
    }

?>