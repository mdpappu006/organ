<?php
	require_once("db.php");
	
	if(isset($_POST['become-donor'])){
		$fname = trim($_POST['donorfname']);
		$lname = trim($_POST['donorlname']);
		$age = trim($_POST['donorage']);
		$email = trim($_POST['donoremail']);
		$donerPhone = $_POST['donor-phone'];
		$donerAddress = $_POST['donor-address'];
		$donerCity = $_POST['donor-city'];
		$donerGender = $_POST['radio'];

		$e_name = $_POST['ename'];
		$eRelationship = $_POST['eRelationship'];
		$ephone = $_POST['ephone'];
		$eEmail = $_POST['eEmail'];
		$eaddress = $_POST['eaddress'];
		

		$bloodGroup = $_POST['donor-b-group'];
		$donorBlood = $_POST['donorblood'] ?? null;
		$organs =  $_POST['organs'] ?? null;

		$insert = "INSERT INTO become_donor(firstname, lastname, age, email, phone, adress, city, gender, e_name, e_relationship, e_phone, e_email, e_address, blood_group, blood_donate, organs_donate) values('$fname', '$lname', '$age', '$email', '$donerPhone', '$donerAddress', '$donerCity', '$donerGender', '$e_name', '$eRelationship', '$ephone', '$eEmail', '$eaddress', '$bloodGroup', '$donorBlood', '$organs')";
		$result = mysqli_query($connect, $insert);
		$_SESSION['create_donor'] = true;
		header("location: doner.php");
	}
?>	