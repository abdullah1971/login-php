<?php
	session_start();
	
	$date = $_REQUEST['date'];
	$courseCode = $_REQUEST['courseCode'];

	$_SESSION['date'] = $date;
	$_SESSION['courseCode'] = $courseCode;

	header('Location: showEdit.php');



?>