<?php
			include "../dbcon.php";
				if(isset($_POST['desg_name']))
				{
					$desg_name = $_POST['desg_name'];

				}

				$sql = "INSERT INTO designation(desg_name) VALUES('{$desg_name}')";
				$query = mysqli_query($conn, $sql);

				if(isset($query))
				{
					echo"<script>alert('Congratulations Designation has been added successfully')</script>";
					echo "<script>window.open('../org/designation.php', '_self')</script>";
				}
				else
				{
					echo"<script>alert('Failed, try again!')</script>";
					echo "<script>window.open('designation.php', '_self')</script>";
				}
		?>