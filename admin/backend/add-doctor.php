<?php
	if(isset($_POST['add-Doctor'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$address = trim($_POST['address']);
		$pass = $_POST['password'];
		$designation = trim($_POST['designation']);
		$insert = "INSERT INTO add_doctor(fastName, Lastname, phone, address, email, password, designation) values('$fname', '$lname', '$phone', '$address', '$email', '$pass', '$designation')";
		$result = mysqli_query($connect, $insert);

		if($result){
			$_SESSION['msg'] = true;
			if($_SESSION['msg']){	
				header('location: add-doctor.php');
				exit;
			}else{
				$error="Doctor doesn't added";
			}
		}
	}
?>	