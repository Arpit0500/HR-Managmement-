<?php 

 include "../dbcon.php";
 //error_reporting(0);
 if (isset($_POST['submit']))
 {
 	$pro_name=$_POST['pro_name'];
 	//$pro_id=$_POST['pro_id'];
 	$pro_lang=$_POST['pro_lang'];
 	$pro_start=$_POST['pro_start'];
 	$pro_end=$_POST['pro_end'];
 }



   $sql="INSERT INTO `pro_new`(`pro_name`, `pro_lang`, `pro_start`, `pro_end`) VALUES('{$pro_name}','{$pro_lang}','{$pro_start}','{$pro_end}')";

   $query=mysqli_query($conn,$sql);
   
   if (isset($query))
   {
   	echo" <script>alert('Congratulations Project Added successfully')</script>";

   	echo"<script>window.open('new_pro.php','_self')</script>";
   } 
   else
   {
   	 	echo" <script>alert('Falied, Error during adding Project')</script>";
   	 	echo"<script>window.open('add_pro.php','_self')</script>";
   }

 ?>