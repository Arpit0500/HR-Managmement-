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
		<p class="head">Holiday</p>
	</div>
	<div class="pos">
		<div class="box1" style="width: 35%; margin-left: 10px;">
			<p style="border-bottom: 2px solid orange;">Add Holiday</p>
			<br>
			<form method="post" action="ins_holiday.php">
			<!--<b style="margin-left: 40px; padding: 10px">Holiday name:</b><input class="ip" type="text" id="name" name="holiday" placeholder="Holiday "required=""><br><br>-->

			<b class="name">Reason:</b><br><textarea class="textb" name="holi_reason" rows="2" cols="50" placeholder="Reason"required=""></textarea>
				<br><br>
				<b class="name">Date:</b><br><input class="ip" type="date" name="holi_date"required=""><br>
			<br><button style="margin-left:50px;" type="submit" name="Save"><i class="fa fa-check" style="margin-right: 3px;"></i>Save</button>
			<button style="margin-left:30px;" type="reset"><i class="fa fa-times" style="margin-right: 3px;"></i>Cancel</button><br><br>
			</form>
		</div>
		
		<div class="box2" style="height: 100%; width: 60%; margin-left: 30px;">
			<p style="border-bottom: 2px solid orange;">Holidays List</p><br>
				<table>
				<thead>
				<tr>
					<th>Sr. No.</th>
					<th>Holiday Reason</th>
					<th>Holiday Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if(isset($_POST['Save']))
			{
				$holi_reason = $_POST['holi_reason']; 
				$holi_date = $_POST['holi_date'];
			}  
					
			include "../dbcon.php";
			$sql = "SELECT * from holiday";
			$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
			
			while($row = mysqli_fetch_array($res))
			{
				$srno = $row['srno'];
			?>
			<tr>

				<td><?php echo $row['srno']; ?></td>
				<td><?php echo $row['holi_reason']; ?></td>
				<td><?php echo $row['holi_date'];?></td>
			
				<td><button type="button" name="edit" style=" width:35px;height:40px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a <?php echo "href='edit_holiday.php?srno= $srno'";?>  onclick="return confirm('Are you sure')"><i class="fas fa-edit" style="font-size: 20px; color: black;"></i></a></button>

					<button type="button" name="delete" style="width: 35px;height:40px;margin-left: 15px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a href="../delete/holiday_delete.php?srno=<?php echo $row['srno']?>" onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt" style="font-size: 20px;color: black;"></i></a></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
		
		</div>
	</div>
</body>

</html>