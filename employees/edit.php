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

    <?php

       include "../dbcon.php";

       $emp_id = $_GET['emp_id'];
       
       $sql = "SELECT * FROM `employee` WHERE emp_id = $emp_id";
      	$res = mysqli_query($conn, $sql) or die("Query Unsuccessful");

       $row = mysqli_fetch_assoc($res);

       $emp_name = $row['emp_name'];
       $emp_code = $row['emp_code'];
       $emp_role = $row['emp_role'];       
       $emp_aadhar = $row['emp_aadhar'];
       $emp_contact = $row['emp_contact'];
       $emp_dob = $row['emp_dob'];
       $emp_djoin = $row['emp_djoin'];
       $emp_email = $row['emp_email'];
       $emp_uname = $row['emp_uname'];

    ?>

	<div class="box1">
			<p style="border-bottom: 2px solid orange;">Update your details here...</p><br> 
               <?php
                    /*if(count($errors) > 0)
                    {
                        foreach($errors as $showerror)
                        {
                            echo $showerror;
                        }
                    }*/
                ?>
            
		<form method="post" action="upd_emp.php">
			<b class="name">Employee Name:</b><b class="mid">Employee code:</b><b class="mid" style="margin-left: 150px;;">Role:</b>

			<input  type="hidden" name="emp_id" value="<?php echo "$emp_id"; ?> ">

            <input  type="text" name="emp_name" value="<?php echo "$emp_name"; ?> "required="">
			 <input  type="" name="emp_code" value="<?php echo "$emp_code"; ?> " required="">

            <select name="emp_role" value="<?php echo "$emp_role"; ?> ">
                <option>Operations Manager</option>
                <option>Office Manager</option>
                <option>Receptionist</option>
                <option >Supervisor</option>
                <option>lead Person</option>
                <option>Tester</option>
                <option>Marketing Manager</option>
                <option>Professional Staff</option>
            </select>

			<br><br><b class="name">Aadhar Number:</b><b class="mid" style="margin-left: 108px;" for="phone">Contact Number:</b><b class="name" style="margin-left: 103px;">Date Of Birth:</b>
            <br>
            <input type="" id="num" onclick="change()" name="emp_aadhar" value="<?php echo "$emp_aadhar"; ?> " required="">
            <input type="" id="num1" onclick="change1()" name="emp_contact" value="<?php echo "$emp_contact"; ?> " required="">
            <input id="date" onclick="changer()" name="emp_dob" value="<?php echo "$emp_dob"; ?> " required="">

            <br><br>
            <b class="name">Date Of Joining:</b><b class="mid" style="margin-left: 118px;" for="phone">Email:</b><b class="name" style="margin-left: 225px;">Username:</b>

                <br><input id="date1" onclick="changer1()" name="emp_djoin" value="<?php echo "$emp_djoin"; ?> " required="">

                <input type="email" name="emp_email" value="<?php echo "$emp_email"; ?> "  required="">
                <input type="text" name="emp_uname" value="<?php echo "$emp_uname"; ?> " required="">

				<br><br>

                <button class="save" style="margin-left: 710px; width: 210px; cursor: pointer;" type="submit" name="Save"><i class="fa fa-check" style="margin-left: 10px; margin-right: 3px;"></i>Update Data</button>

				<!--<button style="margin-left: 50px; width: 135px;" type="reset"><i class="fa fa-times" style="margin-right: 3px; margin-left: 5px;"></i>Cancel</button>--><br><br>
			</form>
		</div> 
    <br>
    <script>

    function change() 
    {
        document.getElementById("num").type = "number";
    }
    function change1() 
    {
        document.getElementById("num1").type = "number";
    }

    function changer() 
    {
        document.getElementById("date").type = "date";
    }
    function changer1() 
    {
        document.getElementById("date1").type = "date";
    }

  </script>

</body>
</html>
