<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


include '../include/connection.php'; 
$id=$_GET['id'];
$row=mysqli_fetch_array(mysqli_query($conn,"SELECT * from tbl_student_fees where id =$id"));
// $row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_student_fees FULL outer join tbl_admission on tbl_student_fees.enrollment_no = tbl_admission.enrollment_no where id=$id"));

$student_name = $row['student_name'];
$date = date("d-m-Y", strtotime($row["date"]));
$amount = $row['amount'];
$payment_mode = $row['payment_mode'];
$remarks = $row['remarks'];


$verificationLink = "https://www.pureskill.in/new_erp/";
	$htmlStr = "";
	
	$htmlStr .= "Dear, <b>".$student_name.",</b><br/><br />";
	$htmlStr .= "We hope this email finds you well. We would like to inform you that we have received your recent payment towards your academic fees.<br>The transaction details are as follows:<br />";
	$htmlStr .= "<br /><br /><b>Date of Payment:</b> $date";
	$htmlStr .= "<br /><br /><b>Amount of Payments:</b> $amount";
	$htmlStr .= "<br /><br /><b>Payment Mode:</b> $payment_mode";
	$htmlStr .= "<br /><br /><b>Remarks:</b> $remarks";
	// $htmlStr .= "<a href='".$verificationLink."' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>Generate Receipt</a><br /><br /><br />";

	$htmlStr .= "<br>Kind regards,<br />";
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
// $mail->addBcc("feesreports@pureskill.in");
$mail->isHTML(true);
$mail->Subject = "Fees Receipt";
$mail->Body = $htmlStr;
$mail->send();

    echo"<script>alert('mail sent');
	window.history.go(-1);</script>";


?>