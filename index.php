<?php include 'include/connection.php';?>
<?php session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}
?>

    

<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>PSIT ERP | Dashboard &amp; Web App Template</title>

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
       
        <br>
        <div class="content">
            <?php include 'top.php'?>
        <div class="row g-3 mb-3">
            <div class="col-xxl-6 col-xl-12">
              <div class="row g-3">
                <div class="col-12">
                  <div class="card bg-transparent-50 overflow-hidden">
                    <div class="card-header position-relative">
                      <div class="bg-holder d-none d-md-block bg-card z-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;"></div><!--/.bg-holder-->
                      <div class="position-relative z-2">
                        <div>
                          <h3 class="text-primary mb-1"><?php $a=new DateTime('now',new DateTimeZone('Asia/Kolkata'));

$time=$a->format('H');
if($time<12 && $time>=6)
{
    echo "Good Morning "  . $_SESSION['first_name']  . ' ' . $_SESSION['last_name']  .  '';
}
elseif($time<16 && $time>=12)
{
    echo "Good Afternoon " . $_SESSION['first_name']  . ' ' . $_SESSION['last_name']  .  '';
}
elseif($time<20 && $time>=16)
{
    echo "Good Evening " . $_SESSION['first_name']  . ' ' . $_SESSION['last_name']  .  '';
}
elseif($time<6 || $time>=20)
{
    echo "Good Night " . $_SESSION['first_name']  . ' ' . $_SESSION['last_name']  .  '';
}?> </h3>
                          <p>Here’s what happening with your business Today  </p>
                        </div>
                      
                      </div>
                    </div>
                   
                  </div>
                </div>
                
              </div>
            </div>
           
          </div>
          <!--<div class="row g-3 mb-3">-->
          <!--  <div class="col-md-6 col-xxl-3">-->
          <!--    <div class="card h-md-100 ecommerce-card-min-width">-->
          <!--      <div class="card-header pb-0">-->
          <!--        <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>-->
          <!--      </div>-->
          <!--      <div class="card-body d-flex flex-column justify-content-end">-->
          <!--        <div class="row">-->
          <!--          <div class="col">-->
          <!--            <p class="font-sans-serif lh-1 mb-1 fs-5">$47K</p><span class="badge badge-subtle-success rounded-pill fs-11">+3.5%</span>-->
          <!--          </div>-->
          <!--          <div class="col-auto ps-0">-->
          <!--            <div class="echart-bar-weekly-sales h-100"></div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-md-6 col-xxl-3">-->
          <!--    <div class="card h-md-100">-->
          <!--      <div class="card-header pb-0">-->
          <!--        <h6 class="mb-0 mt-2">Total Order</h6>-->
          <!--      </div>-->
          <!--      <div class="card-body d-flex flex-column justify-content-end">-->
          <!--        <div class="row justify-content-between">-->
          <!--          <div class="col-auto align-self-end">-->
          <!--            <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span class="badge rounded-pill fs-11 bg-200 text-primary"><span class="fas fa-caret-up me-1"></span>13.6%</span>-->
          <!--          </div>-->
          <!--          <div class="col-auto ps-0 mt-n4">-->
          <!--            <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true"></div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-md-6 col-xxl-3">-->
          <!--    <div class="card h-md-100">-->
          <!--      <div class="card-body">-->
          <!--        <div class="row h-100 justify-content-between g-0">-->
          <!--          <div class="col-5 col-sm-6 col-xxl pe-2">-->
          <!--            <h6 class="mt-1">Market Share</h6>-->
          <!--            <div class="fs-11 mt-3">-->
          <!--              <div class="d-flex flex-between-center mb-1">-->
          <!--                <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Samsung</span></div>-->
          <!--                <div class="d-xxl-none">33%</div>-->
          <!--              </div>-->
          <!--              <div class="d-flex flex-between-center mb-1">-->
          <!--                <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Huawei</span></div>-->
          <!--                <div class="d-xxl-none">29%</div>-->
          <!--              </div>-->
          <!--              <div class="d-flex flex-between-center mb-1">-->
          <!--                <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Apple</span></div>-->
          <!--                <div class="d-xxl-none">20%</div>-->
          <!--              </div>-->
          <!--            </div>-->
          <!--          </div>-->
          <!--          <div class="col-auto position-relative">-->
          <!--            <div class="echart-market-share"></div>-->
          <!--            <div class="position-absolute top-50 start-50 translate-middle text-1100 fs-7">26M</div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-md-6 col-xxl-3">-->
          <!--    <div class="card h-md-100">-->
          <!--      <div class="card-header d-flex flex-between-center pb-0">-->
          <!--        <h6 class="mb-0">Weather</h6>-->
          <!--        <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-weather-update" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>-->
          <!--          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-weather-update"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>-->
          <!--            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--      <div class="card-body pt-2">-->
          <!--        <div class="row g-0 h-100 align-items-center">-->
          <!--          <div class="col">-->
          <!--            <div class="d-flex align-items-center"><img class="me-3" src="<?php echo BASE_URL?>assets/img/icons/weather-icon.png" alt="" height="60" />-->
          <!--              <div>-->
          <!--                <h6 class="mb-2">New York City</h6>-->
          <!--                <div class="fs-11 fw-semi-bold">-->
          <!--                  <div class="text-warning">Sunny</div>Precipitation: 50%-->
          <!--                </div>-->
          <!--              </div>-->
          <!--            </div>-->
          <!--          </div>-->
          <!--          <div class="col-auto text-center ps-2">-->
          <!--            <div class="fs-5 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>-->
          <!--            <div class="fs-10 text-800">32&deg; / 25&deg;</div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          
          <div class="row g-0">
            <div class="col-lg-12 col-xl-12 pe-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
               
                    <table class="table table-dashboard mb-0 table-borderless fs-10 border-200 text-center">
                                <?php
                       
                      
                       $result = mysqli_query($conn,"SELECT *
              FROM tbl_student_fees_reminder JOIN tbl_admission on tbl_admission.enrollment_no = tbl_student_fees_reminder.enrollment_no where MONTH(rem_date) = MONTH(now()) ORDER BY tbl_student_fees_reminder.id DESC");
               if (mysqli_num_rows($result) > 0) { ?> 
                      <thead class="bg-body-tertiary">
                        <tr>
                          <th class="text-800 sort align-middle" data-sort="no">No</th>
                        <th class="text-800 sort align-middle" data-sort="name">Student Name</th>
                        <th class="text-800 sort align-middle" data-sort="name">Date</th>
                         <th class="text-800 sort align-middle" data-sort="name">Reminder Amount</th>
                         <th class="text-800 sort align-middle" data-sort="name">Category</th>
                          <th class="text-800 sort align-middle" data-sort="name">Remarks</th>
                          <th class="text-800 sort align-middle" data-sort="name">Status</th>
                            <th class="text-800 sort align-middle" data-sort="name">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; while($row = mysqli_fetch_array($result)) { ?> 
                      <tr>
                         
                        <td class="align-middle no py-2 pe-14"><?php echo $i; ?></td>
                        
                        <td class="align-middle er py-2 pe-3"><b><?php echo $row["student_name"]; ?></b></td>
                        <td class="align-middle name py-2 pe-2"><?php echo date("d-m-Y", strtotime($row["rem_date"])); ?></td>
                       <td class="align-middle name py-2 pe-2"><?php echo $row["rem_amount"]; ?></td>
                        <td class="align-middle name py-2 pe-2"><?php echo $row["rem_fees_category"]; ?></td>
                         <td class="align-middle name py-2 pe-2"><?php echo $row["remark"]; ?></td>
                       <td class="align-middle counsellor py-2 pe-4"><?php echo $row["status"]; ?></td>
                       <td class="align-middle counsellor py-2 pe-4"><?php echo $row["status"]; ?></td>
                        
                       
                          <!-- <td class="py-2 align-middle white-space-nowrap text-end">
                              <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-0">
                                  <div class="py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                  </div>
                                </div>
                              </div>
                            </td> -->
                     
                      </tr>
                   
                      <?php $i++;  } ?>
                      </tbody>
                    </table>
                       <?php } else{ ?>
                       
                        <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
                      <thead class="bg-body-tertiary">
                        <tr>
                          <th class="text-800 sort align-middle" data-sort="no">No</th>
                        <th class="text-800 sort align-middle" data-sort="name">Student Name</th>
                        <th class="text-800 sort align-middle" data-sort="name">Date</th>
                         <th class="text-800 sort align-middle" data-sort="name">Reminder Amount</th>
                         <th class="text-800 sort align-middle" data-sort="name">Category</th>
                          <th class="text-800 sort align-middle" data-sort="name">Remarks</th>
                          <th class="text-800 sort align-middle" data-sort="name">Status</th>
                            <th class="text-800 sort align-middle" data-sort="name">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                     <?php echo "No Reminder found"; ?>  
                      </tbody>
                    </table>
                       <?php }?>
                  </div>
                </div>
              
              </div>
            </div>
        
          </div>
          
         <?php include 'template/bottom.php'?>
        </div>
        
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/echarts/echarts.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?>polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>

</html>