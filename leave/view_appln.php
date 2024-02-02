
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
		<p>Leave</p>
	</div>
	
	<div class="box2" style="width: 1600px;">
		<p style="border-bottom: 2px solid orange;">Leave Application List</p><br>
		<table aria-label="">
			<thead>
				<tr>
					
					<th>Employee Name</th>
					<th>Employee<br> Id</th>
					<th>Employee <br>Email</th>
					<th>Leave<br> Duration</th>
					<th>Leave <br>Type</th>
					<th>Date</th>
					<th>Reason</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
		<?php
			 include "../dbcon.php";
					$sql = "SELECT * from leave_appln";
					$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
					
			if(mysqli_num_rows($res) > 0)
			{
				while($row = mysqli_fetch_assoc($res))
				{
					$emp_email = $row['emp_email'];
				?>
					<tr>
						<td><?php echo $row['emp_name']; ?></td>
						<td><?php echo $row['emp_id']; ?></td>
						<td><?php echo $row['emp_email']; ?></td>
						<td><?php echo $row['leave_dur']; ?></td>
						<td><?php echo $row['leave_type']; ?></td>
						<td><?php echo $row['date_1']; ?></td>
						<td><?php echo $row['emp_reason']; ?></td>

						
						<td>
							<button type="button" name="edit" style="width:35px;height:40px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a <?php echo "href='email.php?emp_email= $emp_email'";?>  onclick="return confirm('Are you sure')"><i class="fas fa-check" style="font-size: 25px;"></i></a>
					
						<button type="button" name="delete" style="width: 35px;height:40px;margin-left: 15px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a <?php echo "href='email2.php?emp_email= $emp_email'";?>  onclick="return confirm('Are you sure')"><i class="fas fa-times" style="font-size: 25px;"></i></a></td>
						
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
