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

	<?php

       include "../dbcon.php";
       
			$pro_id = $_GET['pro_id'];
		
       $sql = "SELECT * FROM `pro_new` WHERE pro_id = $pro_id";
      	$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");

       $row = mysqli_fetch_array($res);

       $pro_name = $row['pro_name'];
       $pro_lang = $row['pro_lang'];
       $pro_start = $row['pro_start'];
       $pro_end = $row['pro_end'];

    ?>

	<div class="head">
		<p>Project</p>
	</div>
	<div class="btn">
		<button class="btn-1" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 3px;"><a href="new_pro.php">Project List</a></b></i></button>
		<!--<button class="btn-2" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 10px;"><a href="../leave/leave_application.php">Leave Application</a></b></i></button>-->
	</div>
	<div class="box1">
			<p style="border-bottom: 2px solid orange;">Add Project</p><br>	
			<form method="post" action="upd_pro.php">
				<input type="hidden" name="pro_id" value="<?php echo "$pro_id"; ?>">
				<b class="name">Project Name</b><br><input  type="text" id="name" name="pro_name" value="<?php echo "$pro_name"; ?>" required="">
				<br><br>
				<b class="name">Project Language</b><br>
				<select name="pro_lang" class="select" value="<?php echo "$pro_lang"; ?>" >
					<option></option>
					<option>Android</option>
					<option>C++</option>
					<option>Java</option>
					<option>Python</option>
					<option>PHP</option>
					<option>Ruby</option>
					<option>Raspberry Pi</option>				
				</select>
				<br><br><b class="name">Starting Date</b><br><input  type="" id="date" onclick="change()" name="pro_start" value="<?php echo "$pro_start"; ?>" required="">

				<br><br><b class="name">Ending Date</b><br><input  type="" id="date1" onclick="change1()" name="pro_end" value="<?php echo "$pro_end"; ?>" required="">
				
				<br><br><button style="margin-left: 250px;" type="submit" name="submit"><i class="fa fa-check" style="margin-left: 10px; margin-right: 3px;"></i>Save</button>
				<button style="margin-left: 50px;" type="reset"><i class="fa fa-times" style="margin-right: 3px; margin-left: 5px;"></i>Cancel</button><br><br>
			</form>
		</div>
<br><br><br><br>
	<script>

	    function change() 
	    {
	        document.getElementById("date").type = "date";
	    }

	    function change1() 
	    {
	        document.getElementById("date1").type = "date";
	    }

    </script>
</body>
</html>