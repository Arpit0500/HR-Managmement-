<?php
    
    include "../dbcon.php";

    $srno = $_POST['srno'];
    $holi_reason = $_POST['holi_reason'];
    $holi_date = $_POST['holi_date'];
    

   $sql = " UPDATE `holiday` SET `holi_reason`= '$holi_reason', `holi_date`= '$holi_date' WHERE srno = $srno";

   $update = mysqli_query($conn, $sql);

   if(isset($update))
    {
        echo"<script>alert('Holiday updated successfully')</script>";
        echo "<script>window.open('holiday.php', '_self')</script>";
    }
    else
    {
        echo"<script>alert('failed, try again!')</script>";
        echo "<script>window.open('edit_holiday.php', '_self')</script>";
    } 
?>