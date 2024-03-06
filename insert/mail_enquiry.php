<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../view/PHPMailer/src/Exception.php';
require '../view/PHPMailer/src/PHPMailer.php';
require '../view/PHPMailer/src/SMTP.php';

$enquiry= base64_encode(base64_encode(base64_encode('enquiry')));

include '../include/connection.php'; 
// $row=mysqli_fetch_array(mysqli_query($conn,"SELECT * from tbl_student_fees where id =$id"));
// $row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_student_fees FULL outer join tbl_admission on tbl_student_fees.enrollment_no = tbl_admission.enrollment_no where id=$id"));
 $row=mysqli_fetch_array(mysqli_query($conn,"SELECT * from tbl_enquiry ORDER BY id DESC LIMIT 1"));



 $verificationLink = $row['enquiry_name'];
 $htmlStr = "Dear'".$verificationLink."'";
 
 $htmlStr .= "We hope this email finds you well. Thank you for taking the time to visit PureSkill IT Training Academy recently. We value your patronage and appreciate the opportunity to serve you.<br /><br /><br />";
 $htmlStr .= "If you have any comments, suggestions, or concerns about your visit, please feel free to share them with us. Your input is highly valuable, and we take all feedback seriously.<br /><br /><br />";

 $htmlStr .= "Kind regards,<br />";
 $htmlStr .= "<a href='https://www.pureskill.in/' target='_blank'>PureSkill IT Training Academy</a><br />";

	




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
$mail->Subject = "Thank You for Visiting PureSkill IT Training Academy";
$mail->Body = $htmlStr;
$mail->send();

    echo"<script>alert('mail sent')</script>";
    echo "<script>window.open('../template/table.php?VxjMWVHUlhiSGxsVVQwOQ=$enquiry','_self')</script>";
    

?>