<?php
$host='mysql';
$user='root';
$pass='TM1q2w3e.';
$conn = mysql_connect($host, $user, $pass);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
