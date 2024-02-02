<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<link href="../img/img.jpg" rel="icon">

</head>

<body style="background-color: lightgray;">
	
	<div class="head">
		<p class="head">Payroll</p>
	</div>
	<div class="pos">
		<div class="box1">
			<p class="p" style="border-bottom: 2px solid orange;">View/Calculate Salary</p>
			<br>
			<form method="post" action="">
				<b style="font-size: 25px; margin-left: 40px; padding: 10px">Email</b>
				<br>
				<input  type="text" class="bx2ip" name="emp_email" placeholder="Email"required="">
				<br>
				<br>
				<b style="font-size: 25px; margin-left: 40px; padding: 10px">Working Role:</b>
				<br>
				<select name="emp_role" required>
					<option value="-1">Select Role</option>
					<option value="developer">Developer</option>
	                <option value="opr_man">Operations Manager</option>
	                <option value="office_man">Office Manager</option>
	           	    <option value="receptionist">Receptionist</option>
	                <option value="supervisor">Supervisor</option>
	                <option value="lead_man">lead Person</option>
	                <option value="tester">Tester</option>
	                <option value="market_man">Marketing Manager</option>
	                <option value="pro_staff">Professional Staff</option>
            	</select>
			<br><br>
				<b style="font-size: 25px; margin-left: 40px; padding: 10px">Working 		Days:</b>
				<br>
				<input  type="number" class="bx2ip" name="work_days" placeholder="Working Days"required=""><br>
				<br><button type="submit" name="Save">Calculate</button>
				<br><br>

			</form>
			<?php
			include "../dbcon.php";
	
			if(isset($_POST['Save']))
			{
				$emp_email = $_POST['emp_email'];
				$emp_role = $_POST['emp_role'];
				$work_days = $_POST['work_days'];

				if($work_days <= 30)
				{
					$work_days = $_POST['work_days'];

				$check_email = "SELECT * FROM usertable WHERE email = '$emp_email'";
		        $res = mysqli_query($conn, $check_email);

		        if(mysqli_num_rows($res) > 0)
		        {	$tds = "2000";
		        	if($emp_role == "-1")
		        	{
		        		echo"<script>alert('Kindly Select a Working Role..')</script>";
                   		echo "<script>window.open('payroll.php', '_self')</script>";
		        	}
		        	else if($emp_role == "developer")
		        	{
		        		$salary = 55000 - $tds;
		        		$sal_pd = $salary / 30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else if($emp_role == "opr_man")
		        	{
		        		$salary =70000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else if($emp_role == "office_man")
		        	{
		        		$salary = 50000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else if($emp_role == "receptionist")
		        	{
		        		$salary = 35000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else if($emp_role == "supervisor")
		        	{
		        		$salary = 55000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else if($emp_role == "lead_man")
		        	{
		        		$salary = 55000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else if($emp_role == "tester")
		        	{
		        		$salary = 45000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else if($emp_role == "market_man")
		        	{
		        		$salary = 55000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "<p class='ans'><strong>Your salary is:: </strong>$tot_sal</p><br><br>";
		        	}
		        	else
		        	{
		        		$salary = 60000 - $tds;
		        		$sal_pd = $salary/30;
		        		$tot_sal = $sal_pd * $work_days;

		        		echo "Your salary is:: $tot_sal";
		        	}
		        }
		        else
		        {
		        	echo"<script>alert('Email not found.....!')</script>";
                   	echo "<script>window.open('payroll.php', '_self')</script>";
		        }
		        }
				else
				{
					echo"<script>alert('Kindly insert days below 30')</script>";
                   	echo "<script>window.open('payroll.php', '_self')</script>";
				}
			}

			?>
		</div>
		
	</div>
</body>
</html>
<?php
/**include "../dbcon.php";
	
	if(isset($_POST['Save']))
	{
		$emp_email = $_POST['emp_email'];
		$emp_role = $_POST['emp_role'];
		$work_days = $_POST['work_days'];

		$check_email = "SELECT * FROM usertable WHERE email = '$emp_email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0)
        {
        	echo "Hello";
        }
        else
        {
        	echo "byy";
        }
	}*/

?>