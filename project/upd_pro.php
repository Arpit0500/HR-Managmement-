<?php
    
    include "../dbcon.php";

    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_lang = $_POST['pro_lang'];
    $pro_start = $_POST['pro_start'];       
    $pro_end = $_POST['pro_end'];
    

   $sql = " UPDATE `pro_new` SET `pro_name`= '$pro_name',`pro_lang`= '$pro_lang',`pro_start`= '$pro_start',`pro_end`= '$pro_end' WHERE pro_id = $pro_id" or die("Query Unsuccessfull");

   $update = mysqli_query($conn, $sql);

   if(isset($update))
    {
        echo"<script>alert('Congratulations, Project details updated')</script>";
        echo "<script>window.open('new_pro.php', '_self')</script>";
    }
    else
    {
        echo"<script>alert('failed, try again!')</script>";
        echo "<script>window.open('edit_pro.php', '_self')</script>";
    } 
?>