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
		<p>Attendance</p>
	</div>
	<div class="btn">
		<!--<button class="btn-1" type="button"><i style="margin-left: 5px;" class="fa fa-plus"><b style="margin-left: 3px;"><a href="attendance_list.php">Attendance List</a></b></i></button>-->
		<button class="btn-2" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 10px;"><a href="../leave/leave_appln.php">Leave Application</a></b></i></button>
	</div>	
	<div class="box1">
			<p style="border-bottom: 2px solid orange;">Attendance</p><br>	
			<form method="post" action="../insert/ins_attendance.php">
				<b class="name">Employee Name:</b><br><input  type="text" id="name" name="emp_name" placeholder="emp name"required="">
				<br><br><b class="name">Select Date:</b><br><input  type="date" id="date" name="date_1" required="">
				<br><br><b class="name">Sign in Time:</b><br><input  type="time" id="name" name="sign_in" required="">
				<br><br><b class="name">Sign Out Time:</b><br><input  type="time" id="name" name="sign_out"required="">
				<br><br><b class="name">Place:</b><br><input name="place"  placeholder="select place" required="">
				<!--<datalist id="places" name="place">
					<option value="Office"></option>
					<option value="Site"></option>
					<option value="Work from home"></option>
				</datalist>-->
				<br><br><button style="margin-left: 250px;" type="submit" name="save"><i class="fa fa-check" style="margin-left: 10px; margin-right: 3px;"></i>Save</button>
				<button style="margin-left: 50px;" type="reset"><i class="fa fa-times" style="margin-right: 3px; margin-left: 5px;"></i>Cancel</button>
			</form>
		</div>
		<?php
	//  $emp_name="";
	//  $date_1="";
	//  $sign_in="";
	//  $sign_out="";
	//  $place="";
	// //global $number1;
	?>
		 
<br><br><br><br>
</body>
</html>