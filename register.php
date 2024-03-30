<?php 
 include 'include/connection.php';
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

session_start();
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reference = $_POST['reference'];
    $ref_code = strtoupper(bin2hex(random_bytes(4)));

    $exist = "SELECT * FROM tbl_register WHERE email='$email' or  phone='$phone'";
    $result = mysqli_query($conn,$exist);
    $numRows = mysqli_num_rows($result);

    if($numRows > 0){
        echo "<script>alert('Your Mobile Number or Email is already registered')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    }

    else{
        $user = $_SESSION['username'];
        $sql = "INSERT INTO tbl_register (name,email,phone,ref_code,reference,added_by) VALUES ('$name','$email','$phone','$ref_code','$reference','$user')";
        $result = mysqli_query($conn,$sql);

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nemitsagar558@gmail.com';
        $mail->Password = 'zsdf oauy hbnw ghxp';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('nemitsagar558@gmail.com');

        $mail->addAddress($email);

        $mail->isHTML(true);

        $mail->Subject = 'Thank You For Registering in PureSkill Techwar Event.';
        $mail->Body = "Thank You ". $name ." <br><br>
    
                    We are thrilled to extend our heartfelt thanks to you for registering for PureSkill Techwar Event. We truly appreciate your interest and support. <br><br>
                    
                    Your registration has been successfully received, and we are looking forward to welcoming you on PureSkill Techwar Event. We have a fantastic program planned, and we can't wait for you to be a part of it. <br><br>
                    
                    As part of your registration, you have been assigned a unique reference code. Please keep this code handy, as you may be asked at the time of Voting Technologies <br><br>
                    
                    <b>Your Reference code is : ". $ref_code ." </b><br><br>
                    
                    Once again, thank you for choosing PureSkill Techwar Event. We are excited to have you join us, and we're confident that it will be a memorable and enriching experience. <br><br>
                    
                    Thank You, <br><br>
                    
                    PureSkill IT Training Academy";

        $mail->send();

        if($result){
            echo "<script>alert('Registered Successfully')</script>";
        }
    }
    

}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Register</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL?>assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo BASE_URL?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo BASE_URL?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo BASE_URL?>assets/js/config.js"></script>
    <script src="<?php echo BASE_URL?>vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo BASE_URL?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="<?php echo BASE_URL?>assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo BASE_URL?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    <style>
      input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance: none;
        margin: 0;
      }
    </style>
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid" data-layout="container-fluid">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <?php include 'top.php'?>
        <br><div class="content">
          <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative">
            <img class="bg-auth-circle-shape" src="<?php echo BASE_URL?>assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250">
            <img class="bg-auth-circle-shape-2" src="<?php echo BASE_URL?>assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
            <div class="card overflow-hidden z-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7" data-bs-theme="light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/half-circle.png);"></div><!--/.bg-holder-->
                      <div class="z-1 position-relative"><img class="me-2 mb-3" src="<?php echo BASE_URL?>assets/img/pureskill.png" alt="" width="140" />
                        <p class="opacity-75 text-white mt-4">With the power of Falcon, you can now focus only on functionaries for your digital products, while leaving the UI design on us!</p>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <h3>Register</h3>
                        </div>
                      </div>
                      <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post"  enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="card-email">Name</label>
                          <input class="form-control" id="card-email" type="text" name="name" required/>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Email</label>
                          </div>
                          <input class="form-control" id="card-password" type="email" name="email" required/>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Phone</label>
                          </div>
                          <input class="form-control" id="card-password" type="number" name="phone" required/>
                        </div>
                        
                        
                        <div class="mb-3">
                          <label class="form-label" for="card-role">Reference</label>
                          <select class="form-select" id="card-role" name="reference" required>
                          <option disabled selected>Select a option</option>
                            <option value="Student">Student</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Advertisement">Advertisement</option>
                            <option value="Invitation">Invitation</option>
                          </select>
                        </div>
                        
                        <div class="mb-3">
                          <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="register">Log in</button></div>
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> 
          <?php include 'bottom.php';?>
        </div>
        </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/echarts/echarts.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&amp;callback=initMap" async></script>
    <script src="<?php echo BASE_URL?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?><?php echo BASE_URL?>../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>


</html>