<?php
	
	// connection info
	$servername = "localhost";
	$username = "root";
	$password = "";

	// form info
	$date = $_REQUEST['date'];
	$day = $_REQUEST['day'];
	$courseCode = $_REQUEST['courseCode'];
	$teacherName = $_REQUEST['teacherName'];
	$startingTime = $_REQUEST['startingTime'];
	$endTime = $_REQUEST['endTime'];
	$roomNo = $_REQUEST['roomNo'];

	//echo $date.' '.$day.' '.$courseCode.' '.$teacherName.' '.$startingTime.' '.$endTime.' '.$roomNo;



	$conn = new PDO("mysql:host=$servername;dbname=class attendence", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "INSERT INTO attendenceinfo (date, day, courseCode, teacherName, startingTime, endTime, roomNo) VALUES ('$date', '$day', '$courseCode', '$teacherName', '$startingTime', '$endTime', '$roomNo')";
	try {
		$conn->exec($sql);
		header('Location: dailyUpdate.php');
	} catch (Exception $e) {
		echo "Wrong Input Detected<br>";
		echo '<a href="dailyUpdate.php">Go Back</a>';
	}

	$conn = null;
	
?>