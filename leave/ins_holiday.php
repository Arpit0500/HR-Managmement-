<?php
			include "../dbcon.php";
				if(isset($_POST['Save']))
				{
					$holi_reason = $_POST['holi_reason'];
					$holi_date = $_POST['holi_date'];
				}

				$sql = "INSERT INTO `holiday`(`holi_reason`, `holi_date`) VALUES('{$holi_reason}','{$holi_date}')";
				$query = mysqli_query($conn, $sql);

				if(isset($query))
				{
					echo"<script>alert('Holiday has been added successfully')</script>";
					echo "<script>window.open('holiday.php', '_self')</script>";
				}
				else
				{
					echo"<script>alert('Failed, try again!')</script>";
					echo "<script>window.open('holiday.php', '_self')</script>";
				}
		?>