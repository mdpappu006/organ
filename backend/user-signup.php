<?php
	require_once("db.php");
	if(isset($_POST['signup'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$phone = trim($_POST['pnumber']);
		$email = trim($_POST['email']);
		$nid = $_FILES['nid_card'];
		$userpass = $_POST['pass'];
		$pass = password_hash($userpass, PASSWORD_BCRYPT);
		$address = trim($_POST['address']);


		// Upload files
		$file_data= explode(".", $nid['name']);
		$file_ext= end($file_data);

		if(!in_array($file_ext, ['jpg', 'png'], true )){
			$error[] = 'File must be a valid image file';
		}

		$newfileName= uniqid("f", true) . ".". $file_ext;
		$upload = move_uploaded_file($nid['tmp_name'], "nid_photo/" . $newfileName);
		// Upload files



		$insert = "INSERT INTO signup_user(firstname, lastname, phone, email, nid, pass, address) values('$fname', '$lname', '$phone', '$email', '$newfileName', '$pass', '$address')";
		$result = mysqli_query($connect, $insert);
		

		$uQuery = "SELECT id,firstname ,email FROM signup_user WHERE email ='{$email}'";
		$userR= mysqli_query($connect, $uQuery);
		$Udata = mysqli_fetch_assoc($userR);

		if($result){	
			$_SESSION['user'] = true;
			$_SESSION['username'] = $Udata['firstname'];
			$_SESSION['id'] = $Udata['id'];
			$_SESSION['action'] = $Udata['action'];
            header("location: index.php");
			exit();
		}else{
            $_SESSION['error'] = true;
            if($_SESSION['error']){
                header("location: signup.php");
                exit;
            }
        }
	}
?>	