<!DOCTYPE html>
<html>

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
       
			$id = $_GET['dept_id'];
		
       $sql = "SELECT * FROM `department` WHERE dept_id = $id";
      	$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");

       $row = mysqli_fetch_array($res);

       $dept_name = $row['dept_name'];
       

    ?>
	
	<div class="pos">
		<div class="box1">
			<p style="border-bottom: 2px solid orange;">Update Department</p>
			<form method="post" action="upd_dept.php">

			<input  type="hidden" name="dept_id" value="<?php echo "$id"; ?> ">
			<br><br>
			<b style="font-size: 25px; margin-left: 40px; padding: 10px">Department Name:</b><center style="margin-top: 10px;"><input  type="text" id="name" name="dept_name" value="<?php echo "$dept_name"; ?> " required></center>

			<br><button type="submit" name="Save" style="margin-left: 225px;cursor: pointer;"><i class="fa fa-check" style="margin-right: 3px;padding-left: 10px;"></i>Save</button><br><br>
			<!--<button type="reset"><i class="fa fa-times" style="margin-right: 3px;"></i>Cancel</button>-->
			</form>
		</div>
		
		
	</div>
</body>

</html>