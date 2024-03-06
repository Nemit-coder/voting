<?php include '../include/connection.php';?>
<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<?php 
$vid=base64_decode($_GET['viewid']);
$vid1=base64_decode($vid);
$vid2=base64_decode($vid1);
$ret=mysqli_query($conn,"select * from tbl_admission where enrollment_no =$vid2");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
 
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>PSIT Admin | Dashboard &amp; Web App Template</title>

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
            <div class="card-body d-flex flex-wrap flex-between-center">
              <div>
                <h6 class="text-primary"><?php echo $row["enrollment_no"]; ?></h6>
                <h5 class="mb-0"><?php echo $row["student_name"]; ?></h5>
              </div>
              <div>
             
                
            
           
           </div>
              <div>
              <?php $result2 = mysqli_query($conn,"SELECT SUM(amount) AS value_sum FROM tbl_student_fees WHERE enrollment_no =$vid2"); 
                  $v = mysqli_fetch_assoc($result2); 
                  $r = $v['value_sum'];
                  if($r>14999){?> 
              <a class="btn btn-primary btn-sm me-2" type="button" href="<?php echo BASE_URL;?>documents/job_letter.php?sVVQwOQVxjMWVHUlhiSGxVxjiSGxMWVHUlh=<?php echo base64_encode(base64_encode(base64_encode($row['enrollment_no'])));?>">
                <span class="far fa-file-pdf me-md-1"> </span>
                <span class="d-none d-md-inline">Job Offer Letter</span>
                  </a>
              <?php }else{}?>
              <a class="btn btn-falcon-default btn-sm" type="button" href="p_details.php?dfgdgregsdfsdfqwweqwedfbbsdfwerer=<?php echo base64_encode(base64_encode(base64_encode($row['enrollment_no'])));?>">
                <span class="fas fa-tasks me-md-1"></span>
                <span class="d-none d-md-inline">Placement</span>
                  </a> 
                  <a class="btn btn-falcon-default btn-sm" type="button" href="doc.php?hjuweklosdhquqsd12dasdmldfdswe=<?php echo base64_encode(base64_encode(base64_encode($row['enrollment_no'])));?>">
                <span class="fas fa-file me-md-1"></span>
                <span class="d-none d-md-inline">Documents</span>
                  </a> 
              <a class="btn btn-falcon-default btn-sm" type="button" href="s_batch.php?xsVVQwOQlhiSxjMWVHUlhiS=<?php echo base64_encode(base64_encode(base64_encode($row['enrollment_no'])));?>">
                <span class="fas fa-users me-md-1"></span>
                <span class="d-none d-md-inline">Batch</span>
                  </a>              
              <a class="btn btn-falcon-default btn-sm" type="button" href="fdetails.php?vgyjurwyshaiswlfe=<?php echo base64_encode(base64_encode(base64_encode($row['enrollment_no'])));?>">
                <span class="fas fa-money-bill me-md-1"></span>
                <span class="d-none d-md-inline">Fees</span>
                  </a></div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-xxl-6">
              <div class="row g-3">
                <div class="col-7">
                  <div class="card font-sans-serif h-100">
                    <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center">
                    <?php $hud = mysqli_query($conn,"SELECT * FROM tbl_student_documents WHERE category ='Passport_Photo' and enrollment_no=$vid2"); 
                    while ($rowu=mysqli_fetch_array($hud)) {
                     ?>
                      <img class="rounded-3" src='<?php echo BASE_URL?>insert/uploads/<?php echo $vid2?>/<?php echo $rowu["stat_file"]; ?>' height="" width="122" >
                     <?php }?>
                      <table class="table table-borderless fs-10 fw-medium mb-0">
                        <tbody>
                          <tr>
                            <td class="p-1" style="width: 15%;">Admission Date:</td>
                            <td class="p-1" style="width: 25%;"><?php echo date("d-m-Y", strtotime($row["date"])); ?></td>
                          </tr>
                         
                          <tr>
                            <td class="p-1" style="width: 15%;">Email:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row["email"]; ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 15%;">Date of Birth:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo date("d-m-Y", strtotime($row["dob"])); ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Address:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row["address"]; ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Area:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row["area"]; ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">City:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row["city"]; ?></a></td>
                          </tr>

                          <tr>
                            <td class="p-1" style="width: 35%;">Mobile No:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" ><?php echo $row["phone_no"]; ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Alt Mobile No:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" ><?php echo $row["alt_phone_no"]; ?></a></td>
                          </tr>
                          
                          <tr>
                            <td class="p-1" style="width: 35%;">Remarks:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row["remarks"]; ?></a></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="dropdown btn-reveal-trigger position-absolute top-0 end-0 m-3"><button class="btn btn-link btn-reveal text-600 btn-sm dropdown-toggle dropdown-caret-none" type="button" id="studentInfoDropdown" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="studentInfoDropdown"><a class="dropdown-item" href="#!">View Profile</a><a class="dropdown-item" href="#!">Enrolled Courses</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              
            
          
            <div class="col-lg-5 col-xxl-3">
              <div class="card h-100">
                <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                  <h6 class="mb-0">Course Details</h6>
                  <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-payment-methods" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-payment-methods"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row g-3 h-100">
                   
                    <div class="col-sm-6 col-lg-12">
                      <table class="table table-borderless fw-medium font-sans-serif fs-10 mb-2">
                        <tbody>
                          <tr>
                            <td class="p-1" style="width: 35%;">Course:</td>
                            <td class="p-1 text-600"><b><?php echo $row["course_name"]; ?></b></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Counsellor:</td>
                            <td class="p-1 text-600"><?php echo $row["counsellor"]; ?></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Course Category:</td>
                            <td class="p-1 text-600"><h5>
                            <span class="badge rounded-pill badge-subtle-success me-2"><span>
                            <?php echo $row["c_category"]; ?>
                            </span></h5></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Payment Term:</td>
                            <td class="p-1 text-600"> <?php echo $row["payment_mode"]; ?></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Course Fee:</td>
                            <td class="p-1 text-600"><b><?php echo $row["course_fee"]; ?></b></td>
                          </tr>
                          <tr>
                          
                          
             <?php if($row['status']==1){ ?>
              <td class="p-1" style="width: 35%;">Course Status:</td>
                            <td class="p-1 text-600"><h5>
                            <span class="badge rounded-pill badge-subtle-success me-2"><span>
                            Running
                            </span></h5></td>
             </div>
             <?php   }else if($row['status']==2) { ?>
             <div class="badge rounded-pill badge-subtle-warning fs-11">No Records
               <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
             </div>
             <?php   }else{ ?>
               <div class="badge rounded-pill badge-subtle-success fs-11">Completed
                   <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                 </div>
             <?php  } 
                   ?>
                    </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
              </div>
            </div>   
            
                     
          </div>
          
          
          <!-- <div class="card" id="enrolledCoursesTable" data-list='{"valueNames":["title","trainer","date","time","progress","price"]}'>
            <div class="card-header d-flex flex-between-center">
              <h6 class="mb-0">Enrolled Courses</h6>
              <div><button class="btn btn-falcon-default btn-sm me-2" type="button"><span class="fas fa-filter fs-11"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-expand-arrows-alt fs-11"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Expand</span></button></div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive scrollbar">
                <table class="table mb-0 fs-10 border-200 overflow-hidden table-enrolled-courses">
                  <thead class="bg-body-tertiary font-sans-serif">
                    <tr>
                      <th class="text-800 fw-medium sort" data-sort="title">Course Title </th>
                      <th class="text-800 fw-medium sort" data-sort="trainer">Trainer</th>
                      <th class="text-800 fw-medium sort" data-sort="date">Enrollment</th>
                      <th class="text-800 fw-medium sort" data-sort="time">Worked</th>
                      <th class="text-800 fw-medium sort" data-sort="progress">Progress</th>
                      <th class="text-800 fw-medium sort text-end" data-sort="price">Price</th>
                      <th class="text-800 fw-medium no-sort pe-1 align-middle data-table-row-action"></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course3.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Advanced Design Tools for Modern Designs</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">12h:50m:00s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 75%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$39.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course8.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Character Design Masterclass: Your First Superhero</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bruce Timm</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">10h:40m:50s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 60%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$69.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course1.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Script Writing Masterclass: Introdution to Industry Cliches</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">12h:50m:00s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 55%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$69.55</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown2" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course5.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Abstract Painting: Zero to Mastery in Traditional Medium</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">J. H. Williams III</a></td>
                      <td class="align-middle date">03/09/21</td>
                      <td class="align-middle time">38h:10m:09s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 85%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$45.49</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown3" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course7.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Character Design Masterclass: Your First Supervillain</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">02h:29m:00s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 25%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$39.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown4" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course2.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Composition in Comics: Easy to Read Between Panels</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">31/12/21</td>
                      <td class="align-middle time">00h:50m:30s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 15%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$99.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown5" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer bg-body-tertiary py-2 text-center"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Show all enrollments<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
          </div> -->
          <?php include '../template/bottom.php'?>
        </div>
        <?php } ?>
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


<!-- Mirrored from prium.github.io/falcon/v3.19.0/app/e-learning/student-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2023 10:53:46 GMT -->
</html>