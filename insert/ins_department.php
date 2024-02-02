<?php
			include "../dbcon.php";
				if(isset($_POST['dept_name']))
				{
					$dept_name = $_POST['dept_name'];

				}

				$sql = "INSERT INTO department(dept_name) VALUES('{$dept_name}')";
				$query = mysqli_query($conn, $sql);

				if(isset($query))
				{
					echo"<script>alert('Congratulations department has been added successfully')</script>";
					echo "<script>window.open('../org/dept.php', '_self')</script>";
				}
				else
				{
					echo"<script>alert('Failed, try again!')</script>";
					echo "<script>window.open('../org/dept.php', '_self')</script>";
				}
		?>