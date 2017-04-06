<?php
	
	// connection info
	$servername = "localhost";
	$username = "root";
	$password = "";

	// form info
	$teacherId = $_REQUEST['teacherId'];
	$teacherName = $_REQUEST['teacherName'];
	$teacherDept = $_REQUEST['teacherDept'];
	$teacherShortName = $_REQUEST['teacherShortName'];



	$conn = new PDO("mysql:host=$servername;dbname=class attendence", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "INSERT INTO teacherinfo (teacherId, teacherName, teacherDept, teacherShortName) VALUES ('$teacherId', '$teacherName', '$teacherDept', '$teacherShortName')";
	try {
		$conn->exec($sql);
		header('Location: index.php');
	} catch (Exception $e) {
		echo "Wrong Input Detected<br>";
		echo '<a href="index.php">Go Back</a>';
	}

	$conn = null;
	
?>