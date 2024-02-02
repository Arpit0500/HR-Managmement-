<?php
    
    include "../dbcon.php";

    $pro_id = $_GET['pro_id'];
    $sql = "DELETE from pro_new where pro_id = '$pro_id'";
    $delete = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if($delete)
    {
        mysqli_close($conn);
        header("location:new_pro.php");
        exit;
    }
    else
    {
        echo "Error deleting record";
    }

?>