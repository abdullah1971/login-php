<?php
	
	// connection info
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	// data from after submitting form 
	$date = $_REQUEST['date'];
	$courseCode = $_REQUEST['courseCode'];
	
	


	$conn = new PDO("mysql:host=$servername;dbname=class attendence", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// sql to delete a record
	$sql = "DELETE FROM attendenceinfo WHERE date='$date' AND courseCode='$courseCode' ";

	// use exec() because no results are returned
	$conn->exec($sql);


	//echo $stmt->rowCount() . " records UPDATED successfully";

	header('Location: delete.php');