<?php
     define('BASE_URL', 'http://localhost/resitech/');

$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"vote");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error($conn));
}
?>