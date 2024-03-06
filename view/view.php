<?php include '../include/connection.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>PSIT | Dashboard &amp; Web App Template</title>

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
        <?php include '../top.php';?>
        <br>
        <?php 
        // Error handling
     
        // End of error handling
        $vid2=base64_decode(base64_decode(base64_decode($_GET['VxjMWVHUlhiSGxsVVQwOQ'])));
        
          if($vid2 == 'enquiry')
          {
            $result = mysqli_query($conn,"SELECT * FROM tbl_enquiry ORDER BY date DESC");
            include 'enquiry.php';
          }
          else if($vid2 == 'admission')
          {
            $result = mysqli_query($conn,"SELECT * FROM tbl_admission ORDER BY date DESC");
            include 'admission.php';
          }
          else if($vid2 == 'course')
          {
            $sql = "SELECT * FROM tbl_course_master";
                $stmt = $conn->prepare($sql);
                // Execute the statement
                $stmt->execute();
                // Bind the result variables
                $stmt->bind_result($id, $course_name, $course_fee,$course_duration,$center_id,$status,$certificate);
                
            // $result = mysqli_query($conn,"SELECT * FROM tbl_course_master");
            include 'course.php';
          }
          else if($vid2 == 'module')
          {
            $result = mysqli_query($conn,"SELECT * FROM tbl_module_master");
            include 'module.php';
          }
          else if($vid2 == 'batch')
          {
            $result = mysqli_query($conn,"SELECT * FROM tbl_batch");
            include 'batch.php';
          }
          else if($vid2 == 'notice')
          {
            $result = mysqli_query($conn,"SELECT * FROM tbl_notice");
            include 'notice.php';
          }
          else if($vid2 == 'staff')
          {
            $sql = "SELECT * FROM tbl_staff";
            $stmt = $conn->prepare($sql);
            // Execute the statement
            $stmt->execute();
            // Bind the result variables
            $stmt->bind_result($id, $employee_name, $emp_code,$joining_date, $gender, $dob, $address,$area,$city,$pincode,$contact_no,$alt_contact_no,$email,$qualification,$designation,$experience,$work_time,$salary,$center_id,$status);
      
            include 'staff.php';
          }
          else if($vid2 == 'placement')
          {
            
              $result = mysqli_query($conn,"SELECT *
              FROM tbl_admission
              JOIN tbl_placement ON tbl_admission.enrollment_no = tbl_placement.enrollment_no;");
    
            include 'placement.php';
          }
          else if($vid2 == 'student_documents')
          {
            
              $result = mysqli_query($conn,"SELECT *
              FROM tbl_student_documents JOIN tbl_admission on tbl_admission.enrollment_no = tbl_student_documents.enrollment_no ORDER BY tbl_student_documents.id DESC");
    
            include 'doc_list.php';
          }
          else if($vid2 == 'Fees_reminder')
          {
            
               $result = mysqli_query($conn,"SELECT *
              FROM tbl_student_fees_reminder JOIN tbl_admission on tbl_admission.enrollment_no = tbl_student_fees_reminder.enrollment_no ORDER BY tbl_student_fees_reminder.id DESC");
              
          
      
            include 'rem.php';
          }
          else {
            echo "Error: Invalid input";
          }


     
        ?>
        
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