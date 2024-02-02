<?php 

session_start();
 include "../conn.php";
 //error_reporting(0);
 if (isset($_POST['sub']))
 {
 	$emp_name=$_POST['emp_name'];
 	$emp_id=$_POST['emp_id'];
 	$start_date=$_POST['start_date'];
 	$endup_date=$_POST['endup_date'];
 }

   $sql="INSERT INTO `earn leave`(`emp_name`, `emp_id`, `start_date`, `endup_date`) VALUES ('{$emp_name}','{$emp_id}','{$start_date}','{$endup_date}')";

   $query=mysqli_query($conn,$sql);
   if (isset($query))
   {
   	echo" <script>alert('congrats $emp_name you have get ur leave')</script>";

   	echo"<script>window.open('earn_leave.php','_self')</script>";
   } 
   else
   {
   	 	echo" <script>alert('Failed, Error during earning leave')</script>";
   	 	echo"<script>window.open('earn_leave.php','_self')</script>";
   }

 ?>