<?php
    
    include "../dbcon.php";
    $dept_id = $_GET['dept_id'];
    $sql = "DELETE from department where dept_id = '$dept_id'";
    $delete = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if($delete)
    {
        mysqli_close($conn);
        header("location:../org/dept.php");
        exit;
    }
    else
    {
        echo "Error deleting record";
    }

?>