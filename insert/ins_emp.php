<?php
	session_start();
   
    $errors = array();

	include "../dbcon.php";

	if(isset($_POST['Save']))
	{
		$emp_name = mysqli_real_escape_string($conn, $_POST['emp_name']);
		$emp_code = mysqli_real_escape_string($conn, $_POST['emp_code']);
		$emp_dept = mysqli_real_escape_string($conn, $_POST['emp_dept']);
		$emp_desg = mysqli_real_escape_string($conn, $_POST['emp_desg']);
		$emp_role = mysqli_real_escape_string($conn, $_POST['emp_role']);
        $emp_gen = mysqli_real_escape_string($conn, $_POST['emp_gen']);
		$emp_aadhar = mysqli_real_escape_string($conn, $_POST['emp_aadhar']);
		$emp_contact= mysqli_real_escape_string($conn, $_POST['emp_contact']);
		$emp_dob = mysqli_real_escape_string($conn, $_POST['emp_dob']);
        $emp_djoin = mysqli_real_escape_string($conn, $_POST['emp_djoin']);
		$emp_email = mysqli_real_escape_string($conn, $_POST['emp_email']);
        $emp_uname = mysqli_real_escape_string($conn, $_POST['emp_uname']);
        
			$email_check = "SELECT * FROM employee WHERE emp_email = '$emp_email'";

        $res1 = mysqli_query($conn, $email_check);

        if(mysqli_num_rows($res1) > 0)
        {
            echo"<script>alert('Email that you have entered is already exist!')</script>";
        echo "<script>window.open('../employees/add_employee.php', '_self')</script>";
        }
        else
        {
        /*if(isset($res1))
        {
            echo"<script>alert('Email that you have entered is already exist!')</script>";
        echo "<script>window.open('../employees/add_employee.php', '_self')</script>";
        }*/
        $_SESSION['emp_email'] = $emp_email;
        if(count($errors) === 0){

			$sql = "INSERT INTO employee(emp_name, emp_code, emp_dept, emp_desg, emp_role, emp_gen, emp_aadhar, emp_contact, emp_dob, emp_djoin, emp_email, emp_uname) VALUES('{$emp_name}','{$emp_code}','{$emp_dept}','{$emp_desg}','{$emp_role}','{$emp_gen}','{$emp_aadhar}','{$emp_contact}','{$emp_dob}','{$emp_djoin}','{$emp_email}','{$emp_uname}')";

	$query = mysqli_query($conn, $sql);                        
                        
    if(isset($query))
    {
        echo"<script>alert('Congratulations $emp_name, your are added successfully')</script>";
        echo "<script>window.open('../employees/add_employee.php', '_self')</script>";
    }
    else
    {
        echo"<script>alert('failed, try again!')</script>";
        echo "<script>window.open('../employees/add_employee.php', '_self')</script>";
    }
}
}
}
?>