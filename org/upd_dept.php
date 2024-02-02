<?php
    
    include "../dbcon.php";

    $dept_id = $_POST['dept_id'];
    $dept_name = $_POST['dept_name'];
    

   $sql = " UPDATE `department` SET `dept_name`= '$dept_name' WHERE dept_id = $dept_id";

   $update = mysqli_query($conn, $sql);

   if(isset($update))
    {
        echo"<script>alert('Congratulations department updated successfully')</script>";
        echo "<script>window.open('dept.php', '_self')</script>";
    }
    else
    {
        echo"<script>alert('failed, try again!')</script>";
        echo "<script>window.open('edit_dept.php', '_self')</script>";
    } 
?>