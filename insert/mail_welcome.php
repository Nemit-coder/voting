<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../view/PHPMailer/src/Exception.php';
require '../view/PHPMailer/src/PHPMailer.php';
require '../view/PHPMailer/src/SMTP.php';

$admissiony= base64_encode(base64_encode(base64_encode('admission')));

include '../include/connection.php'; 
// $row=mysqli_fetch_array(mysqli_query($conn,"SELECT * from tbl_student_fees where id =$id"));
// $row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_student_fees FULL outer join tbl_admission on tbl_student_fees.enrollment_no = tbl_admission.enrollment_no where id=$id"));
 $row=mysqli_fetch_array(mysqli_query($conn,"SELECT * from tbl_admission ORDER BY id DESC LIMIT 1"));



 $student_name = $row['student_name'];
 $enrollment_no = $row['enrollment_no'];
 
 $htmlStr = "Dear <b>".$student_name."</b><br><br>";
 
 $htmlStr .= "Congratulations and welcome to PureSkill IT Training Academy! We are thrilled to have you as part of our learning community. This marks the beginning of an exciting journey, and we are here to support you every step of the way.<br /><br>";
 $htmlStr .= "<b>Here are a few important details to note:</b><br /><br />";
 $htmlStr .= "<b>Below are the details you'll need for your records:</b><br /><br />";
 $htmlStr .= "<b>Enrollment No: ".$enrollment_no."</b><br /><br />";
 $htmlStr .= "Please make a note of your enrollment number, as it will serve as your identification throughout your academic journey with us.<br />";
 $htmlStr .= "<br><b>1) Student Portal Access: </b><br />";
 $htmlStr .= "Your enrollment number will be your key to accessing our student portal at  <a href='https://www.pureskill.in/student-portal'>Student-portal</a>. Through the portal, you can view your course schedule, download study materials, track your academic progress, and more. Please log in using your enrollment number to explore the available resources.";
 $htmlStr .= "<br><br><b>2) Confirmation of Admission: </b><br />";
 $htmlStr .= "Your admission has been confirmed, and you are now officially part of PureSkill IT Training Academy. You can access your admission confirmation and related details by logging into our student portal at www.pureskill.in/student-portal.";
 $htmlStr .= "<br><br><b>3) Connect with Us: </b><br />";
 $htmlStr .= "Stay connected with us on our Social Media Platforms to receive updates, announcements, and connect with your peers. We encourage you to join our PureSkill Family to engage with our community.";
 $htmlStr .= "<br><br><b>4) Contact Information: </b><br /><br />";
 $htmlStr .= "If you have any questions or need assistance, feel free to reach out to our student services team at info@pureskill.in or visit our website www.pureskill.in for other contact details.<br>";
 $htmlStr .= "We are thrilled to have you as part of our academic community, and we look forward to supporting you in your educational journey. Congratulations once again on completing the enrollment process!";
 $htmlStr .= "<br><a href='https://www.pureskill.in/' target='_blank'>PureSkill IT Training Academy</a><br />";

	




$ya = $row['email'];
$mail = new PHPMailer(true);
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify SMTP server
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'infopureskill@gmail.com'; // SMTP username
$mail->Password = 'amxwnmpfrnbnyltt'; // SMTP password
$mail->SMTPSecure = 'ssl'; // Enable encryption, 'ssl' also accepted
$mail->Port = 465; // TCP port to connect to
$mail->setFrom('infopureskill@gmail.com');
$mail->addAddress($ya);
$mail->isHTML(true);
$mail->Subject = "Welcome to PureSkill IT Training Academy - Your Next Learning Adventure Begins!";
$mail->Body = $htmlStr;
$mail->send();

    echo"<script>alert('mail sent')</script>";
    echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
    

?>