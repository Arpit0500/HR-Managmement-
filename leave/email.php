 <?php 

    $email = $_GET['emp_email'];
    $subject = "Leave application report";
    $message = "Congratulations...! You got a leave.. Get back soon for rest of your work.. Regards Hr Tech Solutions...";
    $sender = "From: hrmsolutions123@gmail.com";

    if(mail($email, $subject, $message, $sender))
    {
        
        echo" <script>alert('Email Sent')</script>";
        echo"<script>window.open('view_appln.php','_self')</script>";
        
    }
    else
    {
        echo" <script>alert(' Failed while sending code! Kindly check your internet connection')</script>";

        echo"<script>window.open('view_appln.php','_self')</script>";
    }

?>