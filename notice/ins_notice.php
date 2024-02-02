<?php
			include "../dbcon.php";
				if(isset($_POST['notice']))
				{
					$notice = $_POST['notice'];

				}

				$sql = "INSERT INTO notice(notice) VALUES('{$notice}')";
				$query = mysqli_query($conn, $sql);

				if(isset($query))
				{
					echo"<script>alert('Congratulations notice has been added successfully')</script>";
					echo "<script>window.open('notice.php', '_self')</script>";
				}
				else
				{
					echo"<script>alert('Failed, try again!')</script>";
					echo "<script>window.open('notice.php', '_self')</script>";
				}
		?>