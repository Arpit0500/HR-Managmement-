
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
        <link rel="stylesheet" href="styles/style2.css">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        
        <link href="img/img.jpg" rel="icon">

        </style>
    </head>
    <body>
        
    <div class="wrapper">
           
            <div class="header">
                <div class="header-menu">
                    <div class="title"><h4>Employee &nbsp;&nbsp;<span>Panel</span></h4>
                    </div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars" style="font-size: 30px;"></i>
                    </div>
                    <ul>
                    <li><!--<a href="#"><button style="border-radius: 10px;width: 120px; font-size: 20px; font-weight: bold;"  
                        onclick="myfunc()"><i class="fas fa-moon"></i>Dark</button></a>-->
                            


                        <li><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li><a href="login_signup/login-user.php" style="border-radius: 10px;width: 120px; font-size: 20px; font-weight: bold;"  onclick="return confirm('Are you sure')"><i class="fas fa-power-off" style="padding-right: 5px;"> </i>Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar" id="sidebar-1">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="img/img.jpg" alt="">
                        <p>HR Staffing</p>
                    </center>
                    <li class="item">
                        <a href="" target="_self" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="item" id="organization">
                        <a href="#organization" class="menu-btn" >
                            <i class="fas fa-sitemap"></i><span>Organization<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="org/emp_dept.php" target="frame"><i class="fas fa-address-card"></i><span>Department</span></a>
                            <a href="org/emp_desg.php" target="frame"><i class="fas fa-sticky-note" ></i><span>Designation</span></a>
                        </div>
                    </li>
                    <!--<li class="item" id="employee">
                        <a href="#employee" class="menu-btn" >
                            <i class="fas fa-people-carry"></i><span>Employees <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="employees/employee_list.php" target="frame"><i class="fas fa-bars"></i><span>Employee list</span></a>
                            <a href="employees/add_employee.php" target="frame"><i class="fas fa-plus"></i><span>Add Employee</span></a>
                            <a href="employees/disciplinary.php" target="frame"><i class="fas fa-minus-square"></i><span>Disciplinary</span></a>
                            <a href="employees/inactive.php" target="frame"><i class="fas fa-exclamation-circle"></i><span>Inactive User</span></a>
                        </div>
                    </li>-->
                    <li class="item" id="attendance">
                        <a href="#attendance" class="menu-btn" >
                            <i class="fas fa-address-book"></i><span>Attendance<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <!--<a href="attendance/attendance_list.php" target="frame"><i class="fas fa-list-alt"></i><span>Attedence List</span></a>-->
                            <a href="attendance/add_attendance.php" target="frame"><i class="fas fa-plus-square"></i><span>Add Attendance</span></a>
                            <!--<a href="attendance/attendance_report.php" target="frame"><i class="fas fa-database"></i><span>Attendance Report</span></a>-->
                        </div>
                    </li>
                    <li class="item" id="leave">
                        <a href="#leave" class="menu-btn" >
                            <i class="fas fa-user"></i><span>Leave<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="leave/emp_holiday.php" target="frame"><i class="fas fa-lock"></i><span>Holiday</span></a>
                            <!--<a href="leave/leave_type.php" target="frame"><i class="fas fa-language"></i><span>Leave Type</span></a>-->
                            <a href="leave/leave_appln.php" target="frame"><i class="fas fa-language"></i><span>Leave Application</span></a>
                            <a href="leave/view_applied_appln.php" target="frame"><i class="fas fa-language"></i><span>View applied aapln</span></a>
                            <!--<a href="leave/earn_leave.php" target="frame"><i class="fas fa-lock"></i><span>Earned Leave</span></a>
                            <a href="leave/report.php" target="frame"><i class="fas fa-lock"></i><span>Report</span></a>-->
                        </div>
                    </li>
                    <li class="item" id="project">
                        <a href="#project" class="menu-btn" >
                            <i class="fas fa-wrench"></i><span>Project<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="project/emp_pro.php" target="frame"><i></i><span>New</span></a>
                            <!--<a href="project/old.php" target="frame"><i></i><span>Old</span></a>-->
                        </div>
                    </li>
                    <li class="item" id="payroll">
                        <a href="payroll/payroll.php" class="menu-btn" target="frame">
                            <i class="fa fa-credit-card" aria-hidden="true"></i><span>Payroll</span>
                        </a>
                        
                    </li>
                     <li class="item">
                        <a href="notice/emp_notice.php" class="menu-btn" target="frame">
                            <i class="fa fa-exclamation-circle"></i><span>Notice</span>
                        </a>
                    <!--</li> <li class="item">
                        <a href="settings.php" class="menu-btn" target="frame">
                            <i class="fas fa-cogs"></i><span>Settings</span>
                        </a>
                    </li>-->
                    
                </div>
            </div>
    
            
            <div class="main-container">

       <iframe style="height: 90vh;" src="dashboard/index.html" name="frame" class="data" scrolling="none" >
        
         </iframe>
           
        </div>
       
    </div>

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>
       

    </body>
</html>