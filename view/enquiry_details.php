<?php include '../include/connection.php';?>
<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}
?><!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<?php
$vid=base64_decode($_GET['viewid']);
$vid1=base64_decode($vid);
$vid2=base64_decode($vid1);
$ret=mysqli_query($conn,"select * from tbl_enquiry where id =$vid2");
while ($row=mysqli_fetch_array($ret)) {


?>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>PureSkill IT Training Academy | Dashboard &amp; Web App Template</title>

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
        <?php include '../top.php'?>
        <br>
       
        <div class="content">
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  <h5 class="mb-2"><?php echo $row["enquiry_name"]; ?> (<a href="mailto:tony@gmail.com">tony@gmail.com</a>)</h5><a class="btn btn-falcon-default btn-sm" href="#!"><span class="fas fa-plus fs-11 me-1"></span>Add note</a><button class="btn btn-falcon-default btn-sm dropdown-toggle ms-2 dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                  <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Report</a><a class="dropdown-item" href="#">Archive</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#">Delete user</a>
                  </div>
                </div>
                <div class="col-auto d-none d-sm-block">
                  <h6 class="text-uppercase text-600">BOY<span class="fas fa-user ms-2"></span></h6>
                </div>
              </div>
            </div>
            <div class="card-body border-top">
              <div class="d-flex"><span class="fas fa-user text-success me-2" data-fa-transform="down-5"></span>
                <div class="flex-1">
                  <p class="mb-0">Enquiry came on</p>
                  <p class="fs-10 mb-0 text-600"><?php echo date("d-m-Y", strtotime($row["date"])); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="mb-0">Enquiry Details</h5>
                </div>
                <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="fas fa-pencil-alt fs-11 me-1"></span>Update details</a></div>
              </div>
            </div>
            <div class="card-body bg-body-tertiary border-top">
              <div class="row">
                <div class="col-lg col-xxl-5">
                  <h6 class="fw-semi-bold ls mb-3 text-uppercase">Enquiry Information</h6>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-1">ID</p>
                    </div>
                    <div class="col"><?php echo $row["enquiry_name"]; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-1">Created</p>
                    </div>
                    <div class="col">2019/01/12 23:13</div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-1">Email</p>
                    </div>
                    <div class="col"><a href="mailto:tony@gmail.com"><?php echo $row["email"]; ?></a></div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-1">Description</p>
                    </div>
                    <div class="col">
                      <p class="fw-semi-bold text-400 mb-1"><?php echo $row["phone_no"]; ?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-0">VAT number</p>
                    </div>
                    <div class="col">
                      <p class="fst-italic text-400 mb-0">No VAT number</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                  <h6 class="fw-semi-bold ls mb-3 text-uppercase">Billing Information</h6>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-1">Send email to</p>
                    </div>
                    <div class="col"><a href="mailto:tony@gmail.com">tony@gmail.com</a></div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-1">Address</p>
                    </div>
                    <div class="col">
                      <p class="mb-1">8962 Lafayette St. <br />Oswego, NY 13126</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-1">Phone number</p>
                    </div>
                    <div class="col"><a href="tel:+12025550110">+1-202-555-0110</a></div>
                  </div>
                  <div class="row">
                    <div class="col-5 col-sm-4">
                      <p class="fw-semi-bold mb-0">Invoice prefix</p>
                    </div>
                    <div class="col">
                      <p class="fw-semi-bold mb-0">7C23435</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer border-top text-end"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="fas fa-dollar-sign fs-11 me-1"></span>Refund</a><a class="btn btn-falcon-default btn-sm ms-2" href="#!"><span class="fas fa-check fs-11 me-1"></span>Save changes</a></div>
          </div>
          
          <?php include '../template/bottom.php'?>
        </div>
        
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    <?php } ?>

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?>polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>


</html>