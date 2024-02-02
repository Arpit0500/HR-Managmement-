<?php
			include "../dbcon.php";
				if(isset($_POST['filename1']))
				{
					$filename1 = $_POST['filename1'];

				}

				$sql = "INSERT INTO todo_pro(filename) VALUES('{$filename1}')"or die("Query Unsuccessful");
				$query = mysqli_query($conn, $sql);

				/*if(isset($query))
				{
					echo"<script>alert('Congratulations department has been added successfully')</script>";
					echo "<script>window.open('../org/dept.php', '_self')</script>";
					header('Location: index.html');

				}
				else
				{
					echo"<script>alert('Failed, try again!')</script>";
					echo "<script>window.open('../org/dept.php', '_self')</script>";
					echo "Error";
				}*/
		?>