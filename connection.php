<?php
$servername = "localhost";
$database = "db_task1";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn) {
		echo "success";
	} 
	else {
		echo "failed";
	}
?>