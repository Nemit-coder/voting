<?php include '../include/connection.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<?php


// $vid=base64_decode($_GET['viewid']);
// $vid1=base64_decode($vid);
$vid=base64_decode($_GET['xsVVQwOQlhiSxjMWVHUlhiS']);
$vid1=base64_decode($vid);
$vid2=base64_decode($vid1);
// $ret=mysqli_query($conn,"SELECT * from tbl_batch where id=$vid2");
// $r = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_batch where id=$vid2"));

// $sql = "SELECT id, batch_id, module_name, employee_name, enrollment_no, s_date, e_date, batch_time, t_marks, p_marks, total, status from tbl_batch_student where enrollment_no = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("i", $vid2);
// $stmt->execute();
// $stmt->bind_result($id, $batch_id, $module_name, $employee_name, $enrollment_no, $s_date, $e_date, $batch_time, $t_marks, $p_marks, $total, $status);
$result1=mysqli_query($conn,"select * from tbl_batch_student where enrollment_no =$vid2 ORDER BY id DESC");
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
        <?php include '../top.php';?>
           <div class="content">
           
          <div class="card mb-3">
            <div class="card-body">
            
              
            <div class="table-responsive fs-10">
              <?php  if (mysqli_num_rows($result1) > 0) { ?> 
                <table class="table table-striped border-bottom text-center">
                  <thead class="bg-200">
                   <tr>
                      <th class="text-900 border-0">No</th>
                      <th class="text-900 border-0">Module Name</th>
                      <th class="text-900 border-0">Batch Date</th>
                      <th class="text-900 border-0">Batch Time</th>
                      <th class="text-900 border-0">Trainer Name</th>
                      <th class="text-900 border-0">Tmarks</th>
                      <th class="text-900 border-0">PMarks</th>
                      <th class="text-900 border-0">Total</th>
                      <th class="text-900 border-0">Batch Status</th>

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
                    
                      <td class="align-middle"><?php echo $row1["module_name"]; ?></td>
                      <td class="align-middle"><?php echo date("d-m-Y", strtotime($row1["s_date"])); ?> - <?php echo date("d-m-Y", strtotime($row1["e_date"])); ?></td>
                     <td class="align-middle"><?php echo $row1["batch_time"]; ?></td>
                      <td class="align-middle"><?php echo $row1["employee_name"]; ?></td>
                        <td class="align-middle">	<?php echo $row1["t_marks"]; ?></td>
                         <td class="align-middle">	<?php echo $row1["p_marks"]; ?></td>
                          <td class="align-middle">	<?php echo $row1["total"]; ?></td>
                        <td class="align-middle ps-3 no"><?php  if($row1["status"]==1){ ?>
            <div class="badge rounded-pill badge-subtle-warning fs-11">Running
                  <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                </div><?php          }
          else {?>
 <div class="badge rounded-pill badge-subtle-success fs-11">Complete
                  <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                </div>
            <?php          } ?></td>
                       
                    </tr>
                    <?php $i++; $count++;  ?>
                  </tbody>
                  <?php } ?>
                </table>
                <?php } else{ echo "No Placement Records found"; }    ?>
              </div>
              
            </div>
          </div>
          <?php include '../template/bottom.php'?>
        </div>
        
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


</html>