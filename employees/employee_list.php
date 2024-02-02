<!DOCTYPE html>
<html lang="en" dir="ltr">
	<style>
		
table
{
    /*font-family: arial, sans-serif;*/
    border-collapse: collapse;
    width: 100%;
}
th
{
	font-size: 22px;
    border: 1px solid #dddddd;
    text-align: left;
    padding: 6px;
}

td
{
    font-size: 18px;
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
	<script src="https://code.jquery.com/jquery-1.10.2.js">

		<link href="../img/img.jpg" rel="icon">

	</script>
	
<body style="background-color: lightgray;">

	<div class="head" style="width: 2100px;">
		<p>Employee</p>
	</div>
	<div class="btn">
		<button class="btn-1" type="button"><i style="margin-left: 5px;" class="fa fa-plus"><b style="margin-left: 3px;"><a href="add_employee.php" style="text-decoration: none;color: black;">Add Employee</a></b></i></button>
		<!--<button class="btn-2" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 10px;"><a href="inactive.php" style="text-decoration: none; color: black;">Inactive Report</a></b></i></button>-->
	</div>	
	<div class="box2" style="width: 2100px;">
		<p style="border-bottom: 2px solid orange;">Employee List</p><br>
		<table id="editable_table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Employee<br> ID</th>
					<th>Employee<br> Name</th>
					<th>Employee<br> Code</th>
					<th>Department<br></th>
					<th>Designation<br></th>
					<th>Role<br></th>
					<th>Gender</th>
                    <th>Aadhar<br> No</th>
					<th>Contact<br> No</th>
                    <th>Date of <br>Birth</th>
					<th>Date of <br> Joining</th>
                    <th>Email</th>
					<th>Username</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
		<?php
		session_start();
			 include "../dbcon.php";
			$sql = "SELECT * from employee";
			$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
					
			/*if(mysqli_num_rows($res) > 0)
			{*/
		while($row = mysqli_fetch_assoc($res))
		{
			$emp_id = $row['emp_id'];
			?>
			<tr>

				<td><?php echo $row['emp_id']; ?></td>
				<td><?php echo $row['emp_name']; ?></td>
				<td><?php echo $row['emp_code']; ?></td>
				<td><?php echo $row['emp_dept']; ?></td>
				<td><?php echo $row['emp_desg']; ?></td>
				<td><?php echo $row['emp_role']; ?></td>
                <td><?php echo $row['emp_gen']; ?></td>
				<td><?php echo $row['emp_aadhar']; ?></td>
				<td><?php echo $row['emp_contact']; ?></td>
				<td><?php echo $row['emp_dob']; ?></td>
				<td><?php echo $row['emp_djoin']; ?></td>
                <td><?php echo $row['emp_email']; ?></td>
				<td><?php echo $row['emp_uname']; ?></td>

				<td><button type="button" name="edit"  style="width:35px;height:40px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a <?php echo "href='edit.php?emp_id= $emp_id'";?> onclick="return confirm('Are you sure')"><i class="fas fa-edit" style="font-size: 20px;"></i></a>

					<button type="button" name="delete" style="width: 35px;height:40px;margin-left: 15px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a href="../delete/emp_delete.php?emp_id=<?php echo $row['emp_id']?>" onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt" style="font-size: 20px;"></i></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<?php/* }
			else
			{
				echo "No records found";
			}*/
		?>

	</div>

</body>
</html>