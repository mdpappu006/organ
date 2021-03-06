<?php
	require_once("db.php");

	// SignUp For Hospital
	if(isset($_POST['signup'])){
		$fname = trim($_POST['fname']);
		$phone = trim($_POST['pnumber']);
		$email = trim($_POST['email']);
		$organization = $_POST['hospital_name'];
		$nid = $_FILES['nid_card'];
		$userpass = $_POST['pass'];
		$pass = password_hash($userpass, PASSWORD_BCRYPT);
		$address = trim($_POST['address']);
		$userId = hexdec(uniqid());

		// Upload files
		$file_data= explode(".", $nid['name']);
		$file_ext= end($file_data);

		if(!in_array($file_ext, ['jpg', 'png'], true )){
			$error[] = 'File must be a valid image file';
		}

		$newfileName= uniqid("f", true) . ".". $file_ext;
		$upload = move_uploaded_file($nid['tmp_name'], "nid_photo/" . $newfileName);
		// Upload files

		//  Data Insertion
		$insert = "INSERT INTO signup_user(userID,firstname,org_name, phone, email, nid, pass, address) values('$userId','$fname', '$organization', '$phone', '$email',  '$newfileName', '$pass', '$address')";
		$result = mysqli_query($connect, $insert);
		//  Data Insertion

		$uQuery = "SELECT id,userID,firstname ,email FROM signup_user WHERE email ='{$email}'";
		$userR= mysqli_query($connect, $uQuery);
		$Udata = mysqli_fetch_assoc($userR);

		if($result){	
			$_SESSION['user'] = true;
			$_SESSION['username'] = $Udata['firstname'];
			$_SESSION['id'] = $Udata['id'];
			$_SESSION['userID'] = $Udata['userID'];
			$_SESSION['action'] = $Udata['action'];
            header("location: index.php");
			exit();
		}else{
            $_SESSION['error'] = true;
			$url = basename(pathinfo($_SERVER['PHP_SELF'])['basename'],".php");
			if($url == 'signup-hospital'){
				if($_SESSION['error']){
					header("location: signup-hospital.php");
					exit;
				}
			}elseif($url == 'signup-clinic'){
				if($_SESSION['error']){
					header("location: signup-clinic.php");
					exit;
				}
			}
        }
	}

	// SignUp For Clinic
	if(isset($_POST['signupClinic'])){
		$fname = trim($_POST['fname']);
		$phone = trim($_POST['pnumber']);
		$email = trim($_POST['email']);
		$org_cli = $_POST['clinic_name'];
		$nid = $_FILES['nid_card'];
		$userpass = $_POST['pass'];
		$pass = password_hash($userpass, PASSWORD_BCRYPT);
		$address = trim($_POST['address']);
		$userId = hexdec(uniqid());

		// Upload files
		$file_data= explode(".", $nid['name']);
		$file_ext= end($file_data);

		if(!in_array($file_ext, ['jpg', 'png'], true )){
			$error[] = 'File must be a valid image file';
		}

		$newfileName= uniqid("f", true) . ".". $file_ext;
		$upload = move_uploaded_file($nid['tmp_name'], "nid_photo/" . $newfileName);
		// Upload files

		//  Data Insertion
		$insert = "INSERT INTO signup_user(userID,firstname,org_name, phone, email, nid, pass, address) values('$userId','$fname', '$org_cli', '$phone', '$email',  '$newfileName', '$pass', '$address')";
		$result = mysqli_query($connect, $insert);
		//  Data Insertion
		
		$uQuery = "SELECT id,userID,firstname ,email FROM signup_user WHERE email ='{$email}'";
		$userR= mysqli_query($connect, $uQuery);
		$Udata = mysqli_fetch_assoc($userR);

		if($result){	
			$_SESSION['user'] = true;
			$_SESSION['username'] = $Udata['firstname'];
			$_SESSION['id'] = $Udata['id'];
			$_SESSION['userID'] = $Udata['userID'];
			$_SESSION['action'] = $Udata['action'];
			header("location: index.php");
			exit();
		}else{
			$_SESSION['error'] = true;
			$url = basename(pathinfo($_SERVER['PHP_SELF'])['basename'],".php");
			if($url == 'signup-hospital'){
				if($_SESSION['error']){
					header("location: signup-hospital.php");
					exit;
				}
			}elseif($url == 'signup-clinic'){
				if($_SESSION['error']){
					header("location: signup-clinic.php");
					exit;
				}
			}
		}
}
	

?>	