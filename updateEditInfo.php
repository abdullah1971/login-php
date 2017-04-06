<?php
	
	// connection info
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	// data from after submitting form 
	$date = $_REQUEST['date'];
	$day = $_REQUEST['day'];
	$courseCode = $_REQUEST['courseCode'];
	$teacherName = $_REQUEST['teacherName'];
	$startingTime = $_REQUEST['startingTime'];
	$endTime = $_REQUEST['endTime'];
	$roomNo = $_REQUEST['roomNo'];


	$conn = new PDO("mysql:host=$servername;dbname=class attendence", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "UPDATE attendenceinfo SET courseCode='$courseCode' , day='$day' ,  teacherName='$teacherName' , startingTime='$startingTime' , endTime='$endTime' , roomNo='$roomNo' WHERE date='$date' AND courseCode='$courseCode' ";

	// Prepare statement
	$stmt = $conn->prepare($sql);

	
	$stmt->execute();

	//echo $stmt->rowCount() . " records UPDATED successfully";

	header('Location: edit.php');

?>