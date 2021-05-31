<?php
	include 'connection.php';

	$rollno  = $_POST['rollno'];
	$name 	 = $_POST['name'];
	$email 	 = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$dept	 = $_POST['dept'];
	$subject = $_POST['subject'];
	$mark 	 = $_POST['mark'];
	$result  = $_POST['result'];
	$grade   = $_POST['grade'];

	$sql 	 = mysqli_query($conn,"INSERT INTO student( `rollno`,`name`,`email`,`mobile`,`dept`,`subject`) VALUES ('$rollno','$name','$email','$mobile','$dept','$subject')");
	// $lastid = $conn->rollno;
	// echo $lastid;
	$sql2 	 = mysqli_query($conn,"INSERT INTO result(`rollno`,`mark`,`result`,`grade`) VALUES('$rollno','$mark','$result','$grade')");

	if ($sql) {
		echo "success";
	} 
	else {
		echo "failed";
	}
	
?>