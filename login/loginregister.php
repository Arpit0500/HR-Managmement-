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
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" style="margin-left: 5px; " class="toggle-btn head" onclick="login()">Emp Login</button>
				<button type="button" style="margin-left: 15px; " class="toggle-btn head" onclick="register()">Admin Login</button>
				<p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
			</div>
		<form id="login" class="input-group" method="post" action="emp_log.php">
			<br>

			<b style="margin-right: 5px;"><i class="fas fa-user"></i>Employee ID::</b><input type="email" style="width: 220px;" name="uname" class="input-feild" placeholder="Employee Email" required="" inputmode="numeric"><br><br>

			<b style="margin-right: 25px;"><i class="fas fa-lock"></i>Password::</b><input type="password" style="width: 220px;" name="emp_pass" class="input-feild" placeholder="Enter Password" minlength="8" maxlength="15" required=""><br><br>
			
			<div class="sign-btn">
			<button type="submit" name="submit" class="submit-btn emp" >Sign In</button>
			<a href="signup.php"><button type="button" name="sub" class="emp2">Sign Up</button></a>
		</div>
		</form>
		
		<form id="register" class="input-group" method="post" action="admin_log.php">
			<br>

			<b style="margin-right: 20px;"><i class="fas fa-user"></i>Admin ID::</b><input type="number" style="width: 220px;" name="admin_id" class="input-feild" placeholder="Admin Id" required="" inputmode="numeric"><br><br>

			<b style="margin-right: 15px;"><i class="fas fa-lock"></i>Password::</b><input type="password" style="width: 220px;" name="admin_pass" class="input-feild" placeholder="Enter Password" minlength="8" maxlength="15" required=""><br><br>
			<button type="submit" style="width: 60%;" name="submit1" class="submit-btn">Log In</button>
		</form>
		
	</div>
</div>

	<script>
		
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		
		function register(){
			//x.style.left = "-400px";
			//y.style.left = "50px";
			//z.style.left = "110px";
			x.style.left = "-480px";
			y.style.left = "35px";
			z.style.left = "185px";
			
		}
		function login(){
			// x.style.left = "50px";
			// y.style.left = "450px";
			// z.style.left = "0";
			x.style.left = "35px";
			y.style.left = "480px";
			z.style.left = "0";
		
		}

	</script>
	
</body>
</html>
