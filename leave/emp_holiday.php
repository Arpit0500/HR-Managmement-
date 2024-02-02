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
		<div class="box1" style="margin-left: 250px; width: 50%;">
			<p style="border-bottom: 2px solid orange;">Holidays List</p><br>
				<table>
				<thead>
				<tr>
					<th>Sr. No.</th>
					<th>Holiday Reason</th>
					<th>Holiday Date</th>
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
			
			</tr>
			<?php } ?>
			</tbody>
		</table>
		
		
	</div>
</body>

</html>