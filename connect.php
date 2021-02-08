<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'product';
//menghubungkan database ke mysql
$con = mysqli_connect($servername, $username, $password, $db);
if (!$con) {
	die ("connection failed.". mysqli_connect_error()); 
}
 ?>