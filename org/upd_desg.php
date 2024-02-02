<?php
    
    include "../dbcon.php";

    $desg_id = $_POST['desg_id'];
    $desg_name = $_POST['desg_name'];


   $sql = "UPDATE `designation` SET `desg_name`= '$desg_name' WHERE desg_id = $desg_id";

   $update = mysqli_query($conn, $sql);

   if(isset($update))
    {
        echo"<script>alert('Congratulations Designation updated successfully')</script>";
        echo "<script>window.open('designation.php', '_self')</script>";
    }
    else
    {
        echo"<script>alert('failed, try again!')</script>";
        echo "<script>window.open('edit_desg.php', '_self')</script>";
    } 
?>