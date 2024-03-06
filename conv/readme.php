<?php 



$sql31 = "SELECT * FROM tbl_admission where date = CURDATE() and counsellor='Amit Mehta'";
$amit_admission = $conn->query($sql31);
$amit_admission = mysqli_num_rows($amit_admission); 

$sql31 = "SELECT * FROM tbl_admission where date = CURDATE() and counsellor='Rahul Kayasth Mehta'";
$rahul_admission = $conn->query($sql31);
$rahul_admission = mysqli_num_rows($rahul_admission); 

// $sql31 = "SELECT * FROM tbl_admission where date BETWEEN '$yas' AND '$yash' and counsellor='Rahul Kayasth'";
// $rahul_admission = $conn->query($sql31);
// $rahul_admission = mysqli_num_rows($rahul_admission); 

// $sql31 = "SELECT * FROM tbl_admission where date BETWEEN '$yas' AND '$yash' and counsellor='Shailesh Patel'";
// $shailesh_admission = $conn->query($sql31);
// $shailesh_admission = mysqli_num_rows($shailesh_admission); 

$sql31 = "SELECT * FROM tbl_admission where DATE(date) = CURDATE()";
$today_admission = $conn->query($sql31);
$today_admission = mysqli_num_rows($today_admission); 
?>