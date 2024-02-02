<?php
	
	/*if(isset($_POST['submit']))
	{*/
		
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

//	}
		$to = "hrmsolutions123gmail.com";
	$headers = "From: ". $email;
	if(mail($subject, $message, $headers))
	{
		echo "Mail send Successfully";
	}
	else
	{
		echo "Hello";
	}

?>