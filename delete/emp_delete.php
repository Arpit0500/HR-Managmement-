<?php
    
    include "../dbcon.php";
    $emp_id = $_GET['emp_id'];
    $sql = "DELETE from employee where emp_id= '$emp_id'";
    $delete = mysqli_query($conn, $sql) or die("<h3>Query Unsuccessful</h3>");

    if($delete)
    {
        mysqli_close($conn);
        header("location:../employees/employee_list.php");
        exit;
    }
    else
    {
        echo "Error deleting record";
    }

?>