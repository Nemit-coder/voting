<?php include 'include/connection.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<?php


// $vid=base64_decode($_GET['viewid']);
// $vid1=base64_decode($vid);

?>
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

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
    <link href="<?php echo BASE_URL?>vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
   
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
           <div class="content">

           <?php 
                    while ($row3=mysqli_fetch_array($result3)){
                      $sum = $row3["MIN(pending_fee)"];
                     
                    
                    while ($row=mysqli_fetch_array($result)) {
                      $demo=$row["email"];
                       ?>
        <div class="mb-2 text-end">
        <?php if($sum == NULl){ ?>
                <a class="btn btn-primary btn-sm me-2" type="button" href="<?php echo BASE_URL?>insert/fees_add.php?lhiSGxVxjMWVHUlhiSVawrdsVQwOQ=<?php echo base64_encode(base64_encode($row['enrollment_no']));?>">
                  <span class="fas fa-plus me-md-1"> </span>
                  <span class="d-none d-md-inline">Add Fees</span>
        </a>
                <a class="btn btn-primary btn-sm me-2" type="button">
                  <span class="fas fa-plus me-md-1"> </span>
                  <span class="d-none d-md-inline">Add Reminder</span>
        </a>
                <?php }
                else if($sum > 0) {
                  
                  ?>

<a class="btn btn-primary btn-sm me-2" type="button" href="<?php echo BASE_URL?>insert/add_fees.php?lhiSGxVxjMWVHUlhiSVawrdsVQwOQ=<?php echo base64_encode(base64_encode($row['enrollment_no']));?>">
                  <span class="fas fa-plus me-md-1"> </span>
                  <span class="d-none d-md-inline">Add Fees</span>
                </a>
                <a class="btn btn-primary btn-sm me-2" type="button" href="<?php echo BASE_URL?>insert/add_rem.php?lhiSGxVxjMWVHUlhiSVawrdsVQwOQ=<?php echo base64_encode(base64_encode($row['enrollment_no']));?>">
                  <span class="fas fa-plus me-md-1"> </span>
                  <span class="d-none d-md-inline">Add Reminder</span>
                </a>
                <?php } else {
               }?>
                <button class="btn btn-falcon-default btn-sm" type="button">
                  <span class="fas fa-file me-md-1"></span>
                  <span class="d-none d-md-inline">Statement</span>
                </button>
              </div>

             
          <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/corner-4.png);opacity: 0.7;">
          </div><!--/.bg-holder-->
            <div class="card-body">
              <div class="row">
                
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                <h5>Student Name: <?php echo $row['student_name']; ?></h5>
              <p class="fs-10">Enrollment No: <?php echo $row['enrollment_no']; ?></p>


              <div>
             
                    
                <strong class="me-2">Fees Status: </strong>
                <?php if($sum>0){ ?>
                  <div class="badge rounded-pill badge-subtle-danger fs-11">Pending
                  <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                </div>
                <?php   }else if($sum==null) { ?>
                <div class="badge rounded-pill badge-subtle-warning fs-11">No Records
                  <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                </div>
                <?php   }else{ ?>
                  <div class="badge rounded-pill badge-subtle-success fs-11">Completed
                      <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                    </div>
                <?php  } 
                      ?>
              
              </div>
                </div>
               
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                  <h5 class="mb-3 fs-9">Contact Address</h5>
                  <h6 class="mb-2">Contact No:  <?php echo $row['phone_no']; ?></h6>
                  <h6 class="mb-2">Email:  <?php echo $row['email']; ?></h6>
                 
                </div>
              </div>
              
            </div>
          </div>
            
  
          <?php 
                            $total = $row["course_fee"];;
                            $paid = $this_month_collection1;
                            $pending = $total - $paid;

                            $c = ($paid / $total)*100;
                            $d = ($pending / $total)*100;
                            $per = number_format($c, 2, '.', '');

                          ?>
          <div class="col-lg-12">
                  <div class="row g-3 mb-3">
                    <div class="col-sm-4">
                      <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/corner-2.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                          <h5>Course Fee</h5>
                          <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":<?php echo $row["course_fee"]; ?>}'>0</div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/corner-3.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        
                          <h5>Amount Paid<span class="badge badge-subtle-info rounded-pill ms-2"><?php echo number_format($c, 2, '.', '');?>%</span></h5>
                          <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-success" data-countup='{"endValue":<?php 
                     
                     if($this_month_collection1==NULL){ echo "0"; } else { echo $this_month_collection1; } 
                    
                     ?>}'></div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                          <h5>Pending Amount<span class="badge badge-subtle-info rounded-pill ms-2"><?php echo number_format($d, 2, '.', '');?>%</span>
                        </h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-danger" data-countup='{"endValue":<?php 
                          if($sum==NULL){ echo $row['course_fee']; } else { echo $sum; }
                          ?>}'></div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
         
          <div class="card mb-3">
            <div class="card-body">
            
              
              <div class="table-responsive fs-10">
              <?php  if (mysqli_num_rows($result1) > 0) { ?> 
                <table class="table table-striped border-bottom text-center">
                  <thead class="bg-200">
                    <tr>
                      <th class="text-900 border-0">No</th>
                      <th class="text-900 border-0">Date</th>
                      <th class="text-900 border-0">Payment Category</th>
                      <th class="text-900 border-0">Amount</th>
                      <th class="text-900 border-0">Mode</th>
                      <th class="text-900 border-0">Remarks</th>
                      <th class="text-900 border-0">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php
                                                            $i=1;
                                                            $count=1;
                                                            while($row1 = mysqli_fetch_array($result1)) {
                                                            ?>
                    <tr class="border-200">
                      <td class="align-middle"><?php echo $count;?></td>
                      <td class="align-middle"><?php echo date("d-m-Y", strtotime($row1["date"])); ?></td>
                      <td class="align-middle"><?php 
                if($row1['fees_category'] == 'Booking'){ ?>
                      <div class="badge rounded-pill badge-subtle-success fs-11">Booking</div>
                <?php }
                else if($row1['fees_category'] == 'New'){ ?>
                          <div class="badge rounded-pill badge-subtle-primary fs-11">New</div>
               <?php }
                else { ?>
                          <div class="badge rounded-pill badge-subtle-info fs-11">Base</div>
               <?php }?></td>
                      <td class="align-middle"><?php echo $row1["amount"]; ?></td>
                      <td class="align-middle"><?php echo $row1["payment_mode"]; ?></td>
                        <td class="align-middle">	<?php echo $row1["remarks"]; ?></td>
                        <td>
                          <a class="btn btn-falcon-default btn-sm" type="button" href="<?php echo BASE_URL?>documents/fees_receipt.php?lhiSGxsVVQwOQVxjMWVHU=<?php echo base64_encode(base64_encode($row1['id']));?>">
                            <span class="fas fa-eye me-md-0"></span>
                </a>
                          <a class="btn btn-falcon-default btn-sm" type="button" href="email_receipt.php?id=<?php echo $row1['id']?>">
                            <span class="fas fa-envelope me-md-0"></span>
                </a>
                        
                        </td>
                    </tr>
                    <?php $i++; $count++;  ?>
                  </tbody>
                  <?php } ?>
                </table>
                <?php } else{ echo "No Fees Records found"; }  }  ?>
              </div>
              
            </div>
          </div>
          <?php include '../template/bottom.php'?>
        </div>
        
        <?php } ?>
    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/chart/chart.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/leaflet/leaflet.js"></script>
    <script src="<?php echo BASE_URL?>vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="<?php echo BASE_URL?>vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/countup/countUp.umd.js"></script>
    <script src="<?php echo BASE_URL?>vendors/echarts/echarts.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fullcalendar/main.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/flatpickr.js"></script>
    <script src="<?php echo BASE_URL?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?><?php echo BASE_URL?><?php echo BASE_URL?><?php echo BASE_URL?>polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.19.0/app/e-commerce/orders/order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2023 10:53:57 GMT -->
</html>