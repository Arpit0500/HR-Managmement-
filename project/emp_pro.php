<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<link href="../img/img.jpg" rel="icon">

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
</head>
<body style="background-color: lightgray;">

	<div class="head">
		<p>Project</p>
	</div>

	<div class="box2" style=" margin-left: 50px; width:80%">
			<p style="border-bottom: 2px solid orange;">Project List</p><br>
			<table aria-label="">
			<thead>
				<tr>
					<th>Project ID</th>
					<th>Project Name</th>
					<th>Project Language</th>
					<th>Start Date</th>
					<th>End Date</th>
					
				</tr>
			</thead>
			<tbody>
		<?php
			 include "../dbcon.php";
					$sql = "SELECT * from pro_new";
					$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
					
			if(mysqli_num_rows($res) > 0)
			{
				while($row = mysqli_fetch_assoc($res))
				{
					$pro_id = $row['pro_id'];
				?>
					<tr>
						<td><?php echo $row['pro_id']; ?></td>
						<td><?php echo $row['pro_name']; ?></td>
						<td><?php echo $row['pro_lang']; ?></td>
						<td><?php echo $row['pro_start']; ?></td>
						<td><?php echo $row['pro_end']; ?></td>
						
						
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
		
		 
<br><br><br><br>
</body>
</html>