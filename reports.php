<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<?php include 'include/connection.php';
session_start();
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
        <?php include 'top.php'; 

          $result1 = "SELECT * FROM tbl_vote WHERE vote1='Networking' or vote2='Networking' or vote3='Networking'";
          $a1 = $conn->query($result1);
          $network = mysqli_num_rows($a1);
  
          $result2 = "SELECT * FROM tbl_vote WHERE vote1='Server Management' or vote2='Server Management' or vote3='Server Management'";
          $a2 = $conn->query($result2);
          $server = mysqli_num_rows($a2);
  
          $result3 = "SELECT * FROM tbl_vote WHERE vote1='Cloud Computing' or vote2='Cloud Computing' or vote3='Cloud Computing'";
          $a3 = $conn->query($result3);
          $cloud = mysqli_num_rows($a3);
  
          $result4 = "SELECT * FROM tbl_vote WHERE vote1='Cyber Security' or vote2='Cyber Security' or vote3='Cyber Security'";
          $a4 = $conn->query($result4);
          $cyber = mysqli_num_rows($a4);
  
          $result5 = "SELECT * FROM tbl_vote WHERE vote1='Web Development' or vote2='Web Development' or vote3='Web Development'";
          $a5 = $conn->query($result5);
          $web = mysqli_num_rows($a5);
  
          $result6 = "SELECT * FROM tbl_vote WHERE vote1='Full Stack Development' or vote2='Full Stack Development' or vote3='Full Stack Development'";
          $a6 = $conn->query($result6);
          $full = mysqli_num_rows($a6);
  
          $result7 = "SELECT * FROM tbl_vote WHERE vote1='Artificial Intelligence and IoT' or vote2='Artificial Intelligence and IoT' or vote3='Artificial Intelligence and IoT'";
          $a7 = $conn->query($result7);
          $artificial = mysqli_num_rows($a7);
        
        $totalVotes = $network + $server + $cloud + $cyber + $web + $full + $artificial;
        ?>
        <br>
       
        <div class="content">
         <div class="row gx-3">
           <div class="col-xxl-12 col-xl-12">
                    <div class="card overflow-hidden mb-5" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/corner-2.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                          <h5>Total Votes</h5>
                          <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":<?php echo $totalVotes ?>}'>0</div>
                          </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-4 my-2 my-2">
                         <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        <h5>Networking</h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":<?php echo $network ?>}'>0</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 my-2">
                         <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        <h5>Server Management</h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":<?php echo $server ?>}'>0</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 my-2">
                         <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        <h5>Cloud Computing</h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":<?php echo $cloud ?>}'>0</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 my-2">
                         <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        <h5>Cyber Security</h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":<?php echo $cyber ?>}'>0</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 my-2">
                         <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        <h5>Web Development</h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":<?php echo $web ?>}'>0</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 my-2">
                         <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        <h5>Full Stack Development</h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":<?php echo $full ?>}'>0</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 my-2">
                         <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div><!--/.bg-holder-->
                        <div class="card-body position-relative">
                        <h5>Artificial Intelligence and IoT</h5>
                        <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":<?php echo $artificial ?>}'>0</div>
                        </div>
                        </div>
                    </div>
        </div>
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
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/glightbox/glightbox.min.js"> </script>
    <script src="assets/js/flatpickr.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="assets/data/world.js"></script>
    <script src="vendors/plyr/plyr.polyfilled.min.js"> </script>
    <script src="vendors/countup/countUp.umd.js"></script>
    <script src="vendors/chart/chart.min.js"></script>
    <script src="vendors/dropzone/dropzone.min.js"></script>
    <script src="vendors/leaflet/leaflet.js"></script>
    <script src="vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/tinymce/tinymce.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="vendors/fullcalendar/main.min.js"></script>
    <script src="vendors/d3/d3.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>


</html>