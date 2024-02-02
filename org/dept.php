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
		<p class="head">Department</p>
	</div>
	<div class="pos">
		<div class="box1">
			<p style="border-bottom: 2px solid orange;">Edit Department</p>
			<br>
			<form method="post" action="../insert/ins_department.php">
			<b style="font-size: 25px; margin-left: 40px; padding: 10px">Department Name:</b><center style="margin-top: 10px;"><input  type="text" id="name" name="dept_name" placeholder="dept name"required=""></center>
			<br><button type="submit" name="Save"><i class="fa fa-check" style="margin-right: 3px;"></i>Save</button>
			<button type="reset"><i class="fa fa-times" style="margin-right: 3px;"></i>Cancel</button><br><br>
			</form>
		</div>
		
		<div class="box2" style="height: 100%;">
			<p style="border-bottom: 2px solid orange;">Department List</p>
				<table>
				<thead>
				<tr>
					<th>Department ID</th>
					<th>Department Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if(isset($_POST['dept_name']))
			{
				$dept_name = $_POST['dept_name']; 
			}  
					
			include "../dbcon.php";
			$sql = "SELECT * from department";
			$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
			
			while($row = mysqli_fetch_array($res))
			{
				$dept_id = $row['dept_id'];
			?>
			<tr>
				<td><?php echo $row['dept_id']; ?></td>
				<td><?php echo $row['dept_name']; ?></td>
					
				<td><button type="button" name="edit" style=" width:35px;height:40px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a <?php echo "href='edit_dept.php?dept_id= $dept_id'";?>  onclick="return confirm('Are you sure')"><i class="fas fa-edit" style="font-size: 20px; color: black;"></i></a></button>

					<button type="button" name="delete" style="width: 35px;height:40px;margin-left: 15px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a href="../delete/dept_delete.php?dept_id=<?php echo $row['dept_id']?>" onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt" style="font-size: 20px;color: black;"></i></a></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
		
		</div>
	</div>
</body>

</html>