<?php
    
    session_start();
    $email = "";
    $errors = array();

    if(isset($_POST['Save']))
	{
		
		$emp_email = mysqli_real_escape_string($conn, $_POST['emp_email']);
				
	}

	$email_check = "SELECT * FROM emp WHERE emp_email = '$emp_email'";
    $res = mysqli_query($conn, $email_check) or die("Query Unsuccessful");;
    if(mysqli_num_rows($res) > 0)
    {
        $errors['emp_email'] = "Email that you have entered is already exist!";
    }

?>