<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Serenity Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>

<body>

  
  <main id="main" >

    
    <section id="about" class="about">
      <div class="container"  >

        <div  class="row justify-content-end">
          <div class="col-lg-12">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i style="padding-left: 30px;" class="icofont-users-social"></i>
                  <span style="padding-left: 30px;" data-toggle="counter-up">165</span>
                  <p style="padding-left: 30px;">Employees</p>
                </div>
              </div>

              <!--<div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">18</span>
                  <p>Attendance</p>
                </div>
              </div>-->

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up">85</span>
                  <p>Projects Completed</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">10</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">15</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>


      </div>
    </section>
  </main><!-- End #main -->

  <div class="sides">
  <div class="box1">
      <p class="p" style="border-bottom: 2px solid orange; color: red;"><marquee behavior="alternate" scrollamount="12"> ** Notice Board **</marquee></p>

      <table aria-label="">
      <thead>
        <tr>
          <th>Title</th>
          <th>Date</th>
          <!--<th>Action</th>-->
          
        </tr>
      </thead>
      <tbody>
  
          <tr>
            <td>Everyday meeting time will be at 5pm </td>
            <td>2021-05-01</td>
            

          </tr>
          <tr>
            <td>During Lockdown Work From Home</td>
            <td>2021-05-02</td>
          </tr>
      </tbody>
    </table>
    <br>
      
    </div>
    <div class="box2">
        <p class="p" style="border-bottom: 2px solid orange;">To do list</p>
        <p style="margin-left: 10px;">List of your next task to complete</p>

      <table>
        <thead>
          <tr>
            <th>Sr No.</th>
            <th>Project(files)</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($_POST['filename']))
          {
            $filename = $_POST['filename']; 
          }  
          
          include "../dbcon.php";
          $sql = "SELECT * FROM `todo_pro`";
          $res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
            echo "$res";
          while($row = mysqli_fetch_array($res))
          {
            ?>
            <tr>
              <td ><?php echo $row['srno']; ?></td>
              <td ><?php echo $row['filename']; ?></td>

                <td><button type="button" name="delete" style="width: 35px;height:40px;margin-left: 15px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a href="#" onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt" style="font-size: 20px;color: black;"></i></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table><br><br>

        <form action="ins_file.php" method="post">
          <input type="file" id="myFile" name="filename1">
          <button type="submit" name="submit" required
          style="
    padding: 5px 5px;
    padding-left: 5px;
    transition: 0.3s;
    transition-property: color;
    font-weight: bold;
    font-size: 20px;
    margin-right:5px;
    border-radius: 10px; 
    background: linear-gradient(to right, #ff105f, #ffad06);">Submit</button>
        </form><br>


    </div>
  </div>
  <div class="sides">

    <div class="box1">
        <p class="p" style="border-bottom: 2px solid orange;">Running Projects</p>
        <table aria-label="">
      <thead>
        <tr>
          <th>Title</th>
          <th>Start Date</th>
          <th>End Date</th>
          
        </tr>
      </thead>
      <tbody>
  
          <tr>
            <td>Everyday meeting time will be at 5pm </td>
            <td>2021-05-01</td>
            <td>2021-06-02</td>

          </tr>
          
      </tbody>
    </table>
    <br>
    </div>
    <div class="box2">
        <p class="p" style="border-bottom: 2px solid orange;">Holidays</p>
        <table aria-label="">
      <thead>
        <tr>
          <th>Title</th>
          <th>Date</th>
          <!--<th>Action</th>-->
          
        </tr>
      </thead>
      <tbody>
  
          <tr>
            <td>Company Holiday</td>
            <td>Every Sunday</td>
            

          </tr>
          <tr>
            <td>netork issues</td>
            <td>2021-06-12</td>
          </tr>
      </tbody>
    </table>
    <br>
    </div>
    
  </div>
  <br><br>
  <!--<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!--Template Main JS File-->
  <script src="assets/js/main.js"></script>

</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Serenity Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>

<body>

  
  <main id="main" >

    
    <section id="about" class="about">
      <div class="container"  >

        <div  class="row justify-content-end">
          <div class="col-lg-12">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i style="padding-left: 30px;" class="icofont-users-social"></i>
                  <span style="padding-left: 30px;" data-toggle="counter-up">165</span>
                  <p style="padding-left: 30px;">Employees</p>
                </div>
              </div>

              <!--<div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">18</span>
                  <p>Attendance</p>
                </div>
              </div>-->

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up">85</span>
                  <p>Projects Completed</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">10</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">15</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>


      </div>
    </section>
  </main><!-- End #main -->

  <div class="sides">
  <div class="box1">
      <p class="p" style="border-bottom: 2px solid orange; color: red;"><marquee behavior="alternate" scrollamount="12"> ** Notice Board **</marquee></p>

      <table aria-label="">
      <thead>
        <tr>
          <th>Title</th>
          <th>Date</th>
          <!--<th>Action</th>-->
          
        </tr>
      </thead>
      <tbody>
  
          <tr>
            <td>Everyday meeting time will be at 5pm </td>
            <td>2021-05-01</td>
            

          </tr>
          <tr>
            <td>During Lockdown Work From Home</td>
            <td>2021-05-02</td>
          </tr>
      </tbody>
    </table>
    <br>
      
    </div>
    <div class="box2">
        <p class="p" style="border-bottom: 2px solid orange;">To do list</p>
        <p style="margin-left: 10px;">List of your next task to complete</p>

      <table>
        <thead>
          <tr>
            <th>Sr No.</th>
            <th>Project(files)</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($_POST['filename']))
          {
            $filename = $_POST['filename']; 
          }  
          
          include "../dbcon.php";
          $sql = "SELECT * FROM `todo_pro`";
          $res = mysqli_query($conn, $sql) or die("Query Unsuccessful");
            echo "$res";
          while($row = mysqli_fetch_array($res))
          {
            ?>
            <tr>
              <td ><?php echo $row['srno']; ?></td>
              <td ><?php echo $row['filename']; ?></td>

                <td><button type="button" name="delete" style="width: 35px;height:40px;margin-left: 15px; background: linear-gradient(to right, #ff105f, #ffad06);cursor: pointer;"><a href="#" onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt" style="font-size: 20px;color: black;"></i></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table><br><br>

        <form action="ins_file.php" method="post">
          <input type="file" id="myFile" name="filename1">
          <button type="submit" name="submit" required
          style="
    padding: 5px 5px;
    padding-left: 5px;
    transition: 0.3s;
    transition-property: color;
    font-weight: bold;
    font-size: 20px;
    margin-right:5px;
    border-radius: 10px; 
    background: linear-gradient(to right, #ff105f, #ffad06);">Submit</button>
        </form><br>


    </div>
  </div>
  <div class="sides">

    <div class="box1">
        <p class="p" style="border-bottom: 2px solid orange;">Running Projects</p>
        <table aria-label="">
      <thead>
        <tr>
          <th>Title</th>
          <th>Start Date</th>
          <th>End Date</th>
          
        </tr>
      </thead>
      <tbody>
  
          <tr>
            <td>Everyday meeting time will be at 5pm </td>
            <td>2021-05-01</td>
            <td>2021-06-02</td>

          </tr>
          
      </tbody>
    </table>
    <br>
    </div>
    <div class="box2">
        <p class="p" style="border-bottom: 2px solid orange;">Holidays</p>
        <table aria-label="">
      <thead>
        <tr>
          <th>Title</th>
          <th>Date</th>
          <!--<th>Action</th>-->
          
        </tr>
      </thead>
      <tbody>
  
          <tr>
            <td>Company Holiday</td>
            <td>Every Sunday</td>
            

          </tr>
          <tr>
            <td>netork issues</td>
            <td>2021-06-12</td>
          </tr>
      </tbody>
    </table>
    <br>
    </div>
    
  </div>
  <br><br>
  <!--<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Main JS File-->
  <script src="assets/js/main.js"></script>

</body>

</html>