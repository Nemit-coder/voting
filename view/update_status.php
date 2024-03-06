<?php include '../include/connection.php';
$staff= base64_encode(base64_encode(base64_encode('staff')));

if(isset($_GET['desid'])){
       $targetId = base64_decode($_GET['desid']);

$result = mysqli_query($conn, "SELECT * FROM tbl_designation_master WHERE  id=$targetId");
$row = mysqli_fetch_array($result);
$status = $row['status'];
       if($status == 1){
              $status = 0;
              mysqli_query($conn, "UPDATE tbl_designation_master SET status='$status'
                            WHERE id=$targetId");
              echo "<script>alert('RECORD Deactivated')</script>";
              echo "<script>window.open('../management/designation.php','_self')</script>";
       }
       else{
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_designation_master SET status='$status'
                            WHERE id=$targetId");
              echo "<script>alert('Record Activated')</script>";
              echo "<script>window.open('../management/designation.php','_self')</script>";
     }

}

else if(isset($_GET['paid'])){

       $targetId = base64_decode($_GET['paid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 2;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>confirm('Course is Disabled')</script>";
                     echo "<script>window.open('student_fees.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>confirm('Course is enabled')</script>";
                     echo "<script>window.open('student_fees.php','_self')</script>";
            }


}


else if(isset($_GET['courseid'])){

       $targetId = base64_decode($_GET['courseid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_course_master WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 0;
                     mysqli_query($conn, "UPDATE tbl_course_master SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is Disabled')</script>";
                     echo "<script>window.open('psit_course_management.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_course_master SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is enabled')</script>";
                     echo "<script>window.open('psit_course_management.php','_self')</script>";
            }


}

else if(isset($_GET['rem_completeid'])){

       $targetId = base64_decode($_GET['rem_completeid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_student_fees_reminder WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 0;
                     mysqli_query($conn, "UPDATE tbl_student_fees_reminder SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Reminder is Disabled')</script>";
                     echo "<script>window.open('fees_reminder.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_student_fees_reminder SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is enabled')</script>";
                     echo "<script>window.open('fees_reminder.php','_self')</script>";
            }


}


else if(isset($_GET['dropid'])){

       $targetId = base64_decode($_GET['dropid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 0;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Student is Droped')</script>";
                     echo "<script>window.open('student_details.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is enabled')</script>";
                     echo "<script>window.open('student_details.php','_self')</script>";
            }


}
else if(isset($_GET['completeid'])){

       $targetId = base64_decode($_GET['completeid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 2;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Student course is completed')</script>";
                     echo "<script>window.open('complete_students.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is enabled')</script>";
                     echo "<script>window.open('complete_students.php','_self')</script>";
            }


}

else if(isset($_GET['staff_disable_id'])){

       $targetId = base64_decode($_GET['staff_disable_id']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_staff WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 2;
                     mysqli_query($conn, "UPDATE tbl_staff SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Staff is disabled')</script>";
                     echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$staff','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_staff SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Staff is Active')</script>";
                     echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$staff','_self')</script>";
            }


}

?>