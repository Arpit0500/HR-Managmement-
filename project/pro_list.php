<!DOCTYPE html>
<html lang="en" dir="ltr">
	<style>
		
table
{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
th
{
	font-size: 22px;
}

td, th
{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 6px;
}
  
tr:nth-child(even) 
{
    background-color: #ebe5e5;
}
		</style>
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
		<button class="btn-1" type="button"><i style="margin-left: 5px;" class="fa fa-plus"><b style="margin-left: 3px;"><a href="add_attendance.php">Add Attendance</a></b></i></button>
		<button class="btn-2" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 10px;"><a href="attendance_report.php">Attendance Report</a></b></i></button>
	</div>	
	<div class="box2">
		<p style="border-bottom: 2px solid orange;">Project List</p><br>
		<table aria-label="">
			<thead>
				<tr>
					<th>Project ID</th>
					<th>Project Name</th>
					<th>Date</th>
					<th>Sign in<br> Time</th>
					<th>Sign out<br> Time</th>
					<th>Place</th>
					<!--<th>Action</th>-->
				</tr>
			</thead>
			<tbody>
		<?php
			 include "../dbcon.php";
					$sql = "SELECT * from attendance_list";
					$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
					
			if(mysqli_num_rows($res) > 0)
			{
				while($row = mysqli_fetch_assoc($res))
				{
				?>
					<tr>
						<td><?php echo $row['emp_id']; ?></td>
						<td><?php echo $row['emp_name']; ?></td>
						<td><?php echo $row['date_1']; ?></td>
						<td><?php echo $row['sign_in']; ?></td>
						<td><?php echo $row['sign_out']; ?></td>
						<td><?php echo $row['place']; ?></td>

						<!--<td><button type="button" name="edit" style="width:35px;height:40px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a href="#?emp_id=<?php //echo $row['emp_id']?>"  onclick="return confirm('Are you sure')"><i class="fas fa-edit" style="font-size: 20px;"></i></a>

						<button type="button" name="delete" style="width: 35px;height:40px;margin-left: 15px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a href="#?emp_id=<?php //echo $row['emp_id']?>" onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt" style="font-size: 20px;"></i></a></td>-->
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<?php }
			else
			{
				echo "No records found";
			}
		?>
	</div>
</body>
</html>