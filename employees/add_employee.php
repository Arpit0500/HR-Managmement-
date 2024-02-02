<?php 
    
    require_once "../insert/ins_emp.php";   
   //include_once '../insert/ins_emp.php';
?>

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
		<p>Employee</p>
	</div>
	<div class="btn">
		<button class="btn-1" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 3px;"><a href="employee_list.php">Employee List</a></b></i></button>
		<!--<button class="btn-2" type="button"><i style="margin-left: 5px;" class="fa fa-bars"><b style="margin-left: 10px;"><a href="disciplinary.php">Disciplinary List</a></b></i></button>-->
	</div>	
	<div class="box1">
			<p style="border-bottom: 2px solid orange;">Add new Employee</p><br> 
               <?php
               /*     if(count($errors) > 0)
                    {
                        foreach($errors as $showerror)
                        {
                            echo $showerror;
                        }
                    }*/
                ?>
            
			<form method="POST" action="../insert/ins_emp.php">
				<b class="name">Employee Name:</b><b class="mid">Employee code:</b><b class="name" style="margin-left: 110px;">Department:</b>
                <br><input  type="text" name="emp_name" placeholder="name"required="">
			    <input  type="number" name="emp_code" placeholder="ID" required="">

				<select name="emp_dept">
                    <option>Administration</option>
                    <option>Finance, HR & Administration</option>
                    <option >Research</option>
                    <option>Information Technology</option>
                    <option>Support </option>
                    <option>Software Developement</option>
                    
                </select>

				<br><br><b class="name">Designation:</b><b class="mid" style="margin-left: 150px;;">Role:</b>
                <b class="name" style="margin-left: 230px;">Gender:</b>
               <br>
                <select class="select" name="emp_desg">
                    <option>Fresher</option>
                    <option>hii</option>
                    <option>hello</option>
                </select>

                <select name="emp_role">
                <option>Operations Manager</option>
                    <option>Office Manager</option>
                    <option>Receptionist</option>
                    <option >Supervisor</option>
                    <option>lead Person</option>
                    <option>Tester</option>
                    <option>Marketing Manager</option>
                    <option>Professional Staff</option>
            
                </select>

                <select class="select" name="emp_gen">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>

				<br><br><b class="name">Aadhar Number:</b><b class="mid" style="margin-left: 108px;" for="phone">Contact Number:</b><b class="name" style="margin-left: 103px;">Date Of Birth:</b>
                <br><input type="number" name="emp_aadhar" placeholder="aadhar no" required="">
                <input type="number" name="emp_contact" placeholder="+0123456789" required="">
                <input type="date" name="emp_dob"  placeholder="" required="">

                <br><br><b class="name">Date Of Joining:</b><b class="mid" style="margin-left: 118px;" for="phone">Email:</b><b class="name" style="margin-left: 225px;">Username:</b>
                <br><input type="date" name="emp_djoin" required="">
                <input type="email" name="emp_email" placeholder="mail" required="">
                <input type="text" name="emp_uname"  placeholder="username" required="">


				<br><br><button style="margin-left: 650px;cursor: pointer;" type="submit" name="Save"><i class="fa fa-check" style="margin-left: 10px; margin-right: 3px;"></i>Save</button>
                
				<button style="margin-left: 50px;cursor: pointer;" type="reset"><i class="fa fa-times" style="margin-right: 3px; margin-left: 5px; "></i>Cancel</button>
                <br><br>
			</form>
		</div> 
<br>

</body>
</html>
