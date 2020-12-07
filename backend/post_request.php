<?php
	require_once("db.php");
	
	if(isset($_POST['postRequest'])){
		$pName = trim($_POST['patientName']);
		$address = trim($_POST['address']);
		$phone = trim($_POST['phone']);
		$organ = trim($_POST['organ']);
		$prescription= $_FILES['uploadFile'];
		$email = trim($_POST['email']);
		$donation = $_POST['radio'];

		// Upload files
		$file_data= explode(".", $prescription['name']);
		$file_ext= end($file_data);

		if(!in_array($file_ext, ['jpg', 'png'], true )){
			$error[] = 'File must be a valid image file';
		}

		$newfileName= uniqid("f", true) . ".". $file_ext;
		$upload= move_uploaded_file($prescription['tmp_name'], "prescription_photo/" . $newfileName);
		// Upload files



		$insert = "INSERT INTO post_request(patientName, address, phone, requiredorgan, prescription, email, donate_user) values('$pName', '$address', '$phone', '$organ', '$newfileName', '$email', '$donation')";
		$result = mysqli_query($connect, $insert);

		if($result){      
            $_SESSION['post_req'] = true;
            if($_SESSION['post_req']){
                header("location: form.php");
                exit;
            }
        }else{
            $_SESSION['post_error'] = true;
            if($_SESSION['post_error']){
                header("location: form.php");
                exit;
            }
        }


	}
?>	