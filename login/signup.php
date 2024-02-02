<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="loginregister.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<style type="text/css">
	
</style>
<body>
	<div class="hero">
		<div class="form-box">
			<div style="width: 190px;" class="button-box">
				<div id="btn"></div>
				<button type="button" style="margin-left: 5px;font-size: 23px; " class="toggle-btn head" >Emp Sign Up</button>
			
			</div>
		<form id="login" class="input-group" method="post" action="emp_log.php">
			<br>

			<b style="margin-right: 5px;"><i class="fas fa-user"></i>Employee ID::</b><input type="number" style="width: 220px;" name="emp_id" class="input-feild" placeholder="Employee Id" required="" inputmode="numeric"><br><br>

			<b style="margin-right: 25px;"><i class="fas fa-lock"></i>Password::</b><input type="password" style="width: 220px;" name="emp_pass" class="input-feild" placeholder="Enter Password" minlength="8" maxlength="15" required=""><br><br>

			<b style="margin-right: 5px;"><i class="fas fa-lock"></i>Confirm Password::</b><input type="password" name="emp_conpass" class="input-feild" placeholder="Confirm Password" minlength="8" maxlength="15" required="">
			<div class="sign-btn">
			<a href="loginregister.php"><button type="submit" name="sub" class="emp2 signup">Sign Up</button></a>
		</div>
	</form>
		</div>
		
	</div>
</div>

	
</body>
</html>