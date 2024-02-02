<?php
    
    include "../dbcon.php";
    $notice_id = $_GET['notice_id'];
    $sql = "DELETE from notice where notice_id = '$notice_id'";
    $delete = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if($delete)
    {
        mysqli_close($conn);
        header("location:../notice/notice.php");
        exit;
    }
    else
    {
        echo "Error deleting record";
    }

?>