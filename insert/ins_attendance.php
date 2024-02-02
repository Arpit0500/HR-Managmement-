<?php
				include "../dbcon.php";
				if(isset($_POST['save']))
				{
					$emp_name = $_POST['emp_name'];
					$date_1 = $_POST['date_1'];
					$sign_in = $_POST['sign_in'];
					$sign_out = $_POST['sign_out'];
					$place = $_POST['place'];
				}
				
						 $sql = "INSERT INTO attendance_list(emp_name, date_1, sign_in, sign_out, place) VALUES('{$emp_name}','{$date_1}','{$sign_in}','{$sign_out}','{$place}')";
						 $query = mysqli_query($conn, $sql);
						
                        
                        if(isset($query)){
                            echo"<script>alert('Congratulations $emp_name, your attendance has been added successfully')</script>";
                            echo "<script>window.open('../attendance/add_attendance.php', '_self')</script>";
                        }else{
                            echo"<script>alert('Attendace failed, try again!')</script>";
                            echo "<script>window.open('../attendance/add_attendance.php', '_self')</script>";
                        }
				?>