<?php 
  
  session_start();
 include "../dbcon.php";
 //error_reporting(0);
 if (isset($_POST['submit']))
 {
 	$emp_name=$_POST['emp_name'];
 	$emp_id=$_POST['emp_id'];
  $emp_email=$_POST['emp_email'];
 	$leave_dur=$_POST['leave_dur'];
 	$leave_type=$_POST['leave_type'];
 	$date_1=$_POST['date_1'];
   $emp_reason=$_POST['emp_reason'];
 
  $email_check = "SELECT * FROM leave_appln WHERE emp_email = '$emp_email'";

    $res1 = mysqli_query($conn, $email_check);

    if(mysqli_num_rows($res1) > 0)
    {
      echo"<script>alert('Email that you have entered is already exist!')</script>";
      echo "<script>window.open('leave_appln.php', '_self')</script>";
    }
    else
    {
      $_SESSION['emp_email'] = $emp_email;

      $sql="INSERT INTO `leave_appln`(`emp_name`, `emp_id`, `emp_email`, `leave_dur`, `leave_type`, `date_1`, `emp_reason`) VALUES('{$emp_name}','{$emp_id}','{$emp_email}','{$leave_dur}','{$leave_type}','{$date_1}','{$emp_reason}')";

        $query=mysqli_query($conn,$sql);
        if (isset($query))
        {
   	      echo" <script>alert(' $emp_name, your leave application successfully added')</script>";

   	      echo"<script>window.open('leave_appln.php','_self')</script>";
        } 
        else
        {
   	  	   echo" <script>alert('Falied, Error during adding application')</script>";
   	 	     echo"<script>window.open('leave_appln.php','_self')</script>";
        }
      }
  }
 ?>