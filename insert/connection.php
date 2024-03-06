<?php
     define('BASE_URL', 'https://pureskill.in/system/');

$url='localhost';
$username='puresvcm_root';
$password='Admin@1504';
$conn=mysqli_connect($url,$username,$password,"puresvcm_psit_erp_db");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?>
