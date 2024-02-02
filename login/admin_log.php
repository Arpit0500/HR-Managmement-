<?php
  include "../dbcon.php";
  if(isset($_POST['submit1']))
  {
    $admin_id = $_POST['admin_id'];
    $admin_pass = $_POST['admin_pass'];
    //$admin_conpass = $_POST['admin_conpass'];
  } 

  //or die("Query Unsuccessful");

            // //$stmt = $conn->prepare($sql);
            // //$stmt->bind_param("ssiis", $emp_name, $date_1, $sign_in, $sign_out, $place);
            //$stmt->execute();

            //echo "Data added successfully"; 
            //$stmt->close();
            // $conn->close();  


    if($admin_id == "101" &&  $admin_pass == "Admin12345")
    {
      //$sql = "INSERT INTO adminlogin(admin_id, admin_pass) VALUES('{$admin_id}','{$admin_pass}')";
      //$query = mysqli_query($conn, $sql);
      echo"<script>alert('Congratulations Admin, Welcome to the Admin's dashboard')</script>";
      echo "<script>window.open('../index.php', '_self')</script>";
    }
    else
    {
      echo"<script>alert('Something is wrong plzz check your id, password and confirm password, try again!')</script>";
      echo "<script>window.open('loginregister.php', '_self')</script>";
    }

                                 /* if(isset($query)){
                                      echo"<script>alert('Congratulations $emp_id, Welcome to the employees dashboard')</script>";
                                      echo "<script>window.open('../index.php', '_self')</script>";
                                  }else{
                                      echo"<script>alert('Attendace failed, try again!')</script>";
                                      echo "<script>window.open('loginregister.php', '_self')</script>";
                                    }*/

                                  // echo $emp_id;
                                  // echo $emp_pass;
                                  // echo $emp_conpass;
                                   //  $conn->close(); 
                          ?>