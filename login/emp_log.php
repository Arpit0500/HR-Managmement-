<?php
    include "../dbcon.php";
    if(isset($_POST['submit']))
    {
      $emp_id = $_POST['emp_id'];
      $emp_pass = $_POST['emp_pass'];
      //$emp_conpass = $_POST['emp_conpass'];
    } 

   /* $sql = "INSERT INTO emplogin(emp_id, emp_pass, emp_conpass) VALUES('{$emp_id}','{$emp_pass}','{$emp_conpass}')";
    $query = mysqli_query($conn, $sql)or die("Query Unsuccessful");*/

            // //$stmt = $conn->prepare($sql);
            // //$stmt->bind_param("ssiis", $emp_name, $date_1, $sign_in, $sign_out, $place);
            //$stmt->execute();

            //echo "Data added successfully"; 
            //$stmt->close();
            // $conn->close();  

            /* $res = "SELECT * from emplogin";
            $result = mysqli_query($conn, $res) or die("Query Unsuccessful");*/
            if($emp_id == "111" && $emp_pass == "admin12345")
            {
              /*$sql = "INSERT INTO emplogin(emp_id, emp_pass) VALUES('{$emp_id}','{$emp_pass}')";
               $query = mysqli_query($conn, $sql)or die("Query Unsuccessful");*/
              echo"<script>alert('Congratulations $emp_id, Welcome to the employees dashboard')</script>";
              echo "<script>window.open('../index.php', '_self')</script>";
            }
            else
            {
              echo"<script>alert('passwod and confirm passwod are not same, try again!')</script>";
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