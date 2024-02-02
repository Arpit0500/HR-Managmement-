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
       
			$srno = $_GET['srno'];
		
       $sql = "SELECT * FROM `holiday` WHERE srno = $srno";
      	$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");

       $row = mysqli_fetch_array($res);

       $holi_reason = $row['holi_reason'];
       $holi_date = $row['holi_date'];
       

    ?>
	
	<div class="pos">
		<div class="box1">
			<p style="border-bottom: 2px solid orange;">Update Holiday</p>
			<form method="post" action="upd_holiday.php">

			<input  type="hidden" name="srno" value="<?php echo "$srno"; ?> ">
			<br>
			<b style="font-size: 25px; margin-left: 40px; padding: 10px">Holiday Reason:</b><br><textarea class="textb" name="holi_reason" rows="2" cols="50" value="<?php echo "$holi_reason"; ?>" required=""></textarea><br><br>
			<b class="name">Date:</b><br><input class="ip" type="" id="holi_date" name="holi_date" value="<?php echo"$holi_date";?>"  onclick="changer()" required=""><br>

			<br><button type="submit" name="Save" style="margin-left: 225px;cursor: pointer;"><i class="fa fa-check" style="margin-right: 3px;padding-left: 10px;"></i>Save</button><br><br>
			<!--<button type="reset"><i class="fa fa-times" style="margin-right: 3px;"></i>Cancel</button>-->
			</form>
		</div>
		
		
	</div>
	<script>

    function changer() 
    {
        document.getElementById("holi_date").type = "date";
    }
</script>
</body>

</html>