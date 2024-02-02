<?php

    session_start();    
    include "../dbcon.php";
    if(isset($_POST['Save']))
    {
        $emp_id = $_POST['emp_id'];
        $emp_name = $_POST['emp_name'];
        $emp_code = $_POST['emp_code'];
        $emp_role = $_POST['emp_role'];       
        $emp_aadhar = $_POST['emp_aadhar'];
        $emp_contact = $_POST['emp_contact'];
        $emp_dob = $_POST['emp_dob'];
        $emp_djoin = $_POST['emp_djoin'];
        $emp_email = $_POST['emp_email'];
        $emp_uname = $_POST['emp_uname'];

         $email_check = "SELECT * FROM employee WHERE emp_email = '$emp_email'";

        $res1 = mysqli_query($conn, $email_check);

        if(mysqli_num_rows($res1) > 0)
        {
            echo"<script>alert('Email that you have entered is already exist!')</script>";
        echo "<script>window.open('upd_emp.php', '_self')</script>";
        }
        else
        {
           /* $_SESSION['emp_email'] = $emp_email;*/
   $sql = " UPDATE `employee` SET `emp_name`= '$emp_name',`emp_code`= '$emp_code',`emp_role`= '$emp_role',`emp_aadhar`= '$emp_aadhar',`emp_contact`= '$emp_contact',`emp_dob`= '$emp_dob',`emp_djoin`= '$emp_djoin',`emp_email`= '$emp_email',`emp_uname`= '$emp_uname' WHERE emp_id = $emp_id";

   $update = mysqli_query($conn, $sql);

   if(isset($update))
    {
        echo"<script>alert('Congratulations $emp_name, your data is succesfully updated')</script>";
        echo "<script>window.open('employee_list.php', '_self')</script>";
    }
    else
    {
        echo"<script>alert('failed, try again!')</script>";
        echo "<script>window.open('edit.php', '_self')</script>";
    }
}
}
?>