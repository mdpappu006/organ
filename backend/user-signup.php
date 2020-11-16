<?php
	require_once("db.php");
	
	if(isset($_POST['signup'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['pnumber'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$address = $_POST['address'];
		$donation = $_POST['donation'];

		$insert = "INSERT INTO signup_user(firstname, lastname, phone, email, pass, address, donate_user) values('$fname', '$lname', '$phone', '$email', '$pass', '$address', '$donation')";

		$result = mysqli_query($connect, $insert);
		header("location: signup.php");
	}
?>	