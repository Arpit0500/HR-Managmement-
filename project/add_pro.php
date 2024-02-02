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
		<p>Project</p>
	</div>
	<div class="btn">
		<a href="new_pro.php"><button class="btn-1" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 3px;">Project List</b></i></button></a>
		
		<!--<button class="btn-2" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 10px;"><a href="../leave/leave_application.php">Leave Application</a></b></i></button>-->
	</div>
	<div class="box1">
			<p style="border-bottom: 2px solid orange;">Add Project</p><br>	
			<form method="post" action="add_pro_in.php">
				<b class="name">Project Name</b><br><input  type="text" id="name" name="pro_name" placeholder="Project Name"required="">
				<br><br>
				<b class="name">Project Language</b><br>
				<select name="pro_lang" class="select" >
					<option></option>
					<option>Android</option>
					<option>C++</option>
					<option>Java</option>
					<option>Python</option>
					<option>PHP</option>
					<option>Ruby</option>
					<option>Raspberry Pi</option>				
				</select>
				<br><br><b class="name">Starting Date</b><br><input  type="date" name="pro_start" required="">
				<br><br><b class="name">Ending Date</b><br><input  type="date" name="pro_end"required="">
				
				<br><br><button style="margin-left: 250px;" type="submit" name="submit"><i class="fa fa-check" style="margin-left: 10px; margin-right: 3px;"></i>Save</button>
				<button style="margin-left: 50px;" type="reset"><i class="fa fa-times" style="margin-right: 3px; margin-left: 5px;"></i>Cancel</button><br><br>
			</form>
		</div>
<br><br><br><br>
</body>
</html>