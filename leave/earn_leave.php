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
		<p>Leave</p>
	</div>
	<!--<div class="btn">
		<button class="btn-1" type="button"><i style="margin-left: 5px;" class="fa fa-plus"><b style="margin-left: 3px;"><a href="attendance_list.php">Attendance List</a></b></i></button>
		<button class="btn-2" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 10px;"><a href="../leave/leave_application.php">Leave Application</a></b></i></button>
	</div>	-->
	<div class="box1">
			<p style="border-bottom: 2px solid orange;">Earn Leave</p><br>	
			<form method="post" action="leave_in.php">
				<b class="name">Name</b><br><input  type="text" class="input" id="name" name="emp_name" placeholder="Employee Name"required="">
				<br><br><b class="name">Employee Id</b><br><input class="input" type="number" name="emp_id" placeholder="Employee ID" required="">
				<br><br><b class="name">Starting Date/Time</b><br><input class="input" type="datetime-local" name="start_date" required="">
				<br><br><b class="name">Ending Date/Time:</b><br><input class="input" type="datetime-local" name="endup_date"required="">
				
				<br><br><button style="margin-left: 250px;" type="submit" name="sub"><i class="fa fa-check" style="margin-left: 10px; margin-right: 3px;"></i>Save</button>
				<button style="margin-left: 50px;" type="reset"><i class="fa fa-times" style="margin-right: 3px; margin-left: 5px;"></i>Cancel</button><br><br>
			</form>
		</div>
	 
<br><br><br><br>
</body>
</html>