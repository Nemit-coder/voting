<?php

$yashh =  $_SESSION['role'];
$r = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_role where id=$yashh"));
?>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="<?php echo BASE_URL?>index.php">
            <div class="d-flex align-items-center">
              <img class="me-2" src="<?php echo BASE_URL?>assets/img/pureskill.png" alt="" width="140" />
            </div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard" style="margin-left:150px">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <?php if( $r['id'] == 1 || $r['id'] == 2){?>  
              <li class="nav-item dropdown">
                <a class="nav-link" href="view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('enquiry')));?>" role="button"  aria-haspopup="true" aria-expanded="false">Enquiry</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Admission List</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('admission')));?>">Admission List</a>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('student_documents')));?>">Document</a>                  </div>
                </div>
              </li>
              <?php }else {}?>

              <?php if( $r['id'] == 1 || $r['id'] == 3){?>  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Student List</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('view_student')));?>">Student List</a>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('complete_student')));?>">Complete Student</a>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('placement')));?>">Placement</a>
                  </div>
                </div>
              </li>

             

              <li class="nav-item dropdown">
                <a class="nav-link" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('batch')));?>" role="button"  aria-haspopup="true" aria-expanded="false">Batch</a>
              </li>
              <?php }else {}?>
              <li class="nav-item dropdown">
                <a class="nav-link" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('staff')));?>" role="button"  aria-haspopup="true" aria-expanded="false">Staff</a>
              </li>

              <?php if( $r['id'] == 1 || $r['id']==3){?>  
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Master</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('course')));?>">Course</a>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('module')));?>">Module</a>
                    <?php if( $r['id'] == 1){?>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('batch_time')));?>">Batch Time</a>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('designation')));?>">Designation</a>
                    
                  </div>
                </div>
              </li>
              <?php } else {}  }else {}?>


              <?php if( $r['id'] == 1){?>  
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Notice</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('notice')));?>">Student Notice</a>
                    
                  </div>
                </div>
              </li>
             
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Report</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>insert/insert.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('report')));?>">Month Report</a>
                    
                  </div>
                </div>
              </li>
              <?php }else {}?>

              <?php if( $r['id'] == 1){?>  
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Placement</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('placement')));?>">Placement</a>
                    
                  </div>
                </div>
              </li>
             
              
              <?php }else {}?>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
          
            
           
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="<?php echo BASE_URL?>assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><?php echo $_SESSION['first_name'] .$_SESSION['last_name']?></span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL?>pages/user/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo BASE_URL?>pages/user/settings.html">Settings</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL?>logout.php">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>