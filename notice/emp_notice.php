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
		<p class="head">Notice</p>
	</div>
	<div class="pos">
		<div class="box1" style="margin-left: 250px; width: 50%;">
			<p style="border-bottom: 2px solid orange;">Notice List</p><br>
				<table>
				<thead>
				<tr>
					<th>Notice ID</th>
					<th>Notice</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if(isset($_POST['notice']))
			{
				$notice = $_POST['notice']; 
			}  
					
			include "../dbcon.php";
			$sql = "SELECT * from notice";
			$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
			
			while($row = mysqli_fetch_array($res))
			{
				$notice_id = $row['notice_id'];
			?>
			<tr>
				<td><?php echo $row['notice_id']; ?></td>
				<td><?php echo $row['notice']; ?></td>
					
				
			</tr>
			<?php } ?>
			</tbody>
		</table>
		
		
	</div>
</body>

</html>