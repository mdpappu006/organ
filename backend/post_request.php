<?php
	require_once("db.php");
	
	if(isset($_POST['postRequest'])){
		$pName = trim($_POST['patientName']);
		$address = trim($_POST['address']);
		$phone = trim($_POST['phone']);
		$organ = trim($_POST['organ']);
		$prescription = $_POST['prescription'];
		$email = trim($_POST['email']);
		$donation = $_POST['radio'];
		$insert = "INSERT INTO post_request(patientName, address, phone, requiredorgan, prescription, email, donate_user) values('$pName', '$address', '$phone', '$organ', '$prescription', '$email', '$donation')";
		$result = mysqli_query($connect, $insert);
		$_SESSION['post'] = true;
		header("location: form.php");
	}
?>	