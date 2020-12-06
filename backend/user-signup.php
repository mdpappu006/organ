<?php
	require_once("db.php");
	if(isset($_POST['signup'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$phone = trim($_POST['pnumber']);
		$email = trim($_POST['email']);
		$userpass = $_POST['pass'];
		$pass = password_hash($userpass, PASSWORD_BCRYPT);
		$address = trim($_POST['address']);
		$insert = "INSERT INTO signup_user(firstname, lastname, phone, email, pass, address) values('$fname', '$lname', '$phone', '$email', '$pass', '$address')";
		$result = mysqli_query($connect, $insert);
            
		$uQuery = "SELECT id,firstname ,email FROM signup_user WHERE email ='{$email}'";
		$userR= mysqli_query($connect, $uQuery);
		$Udata = mysqli_fetch_assoc($userR);

		if($result){	
			$_SESSION['user'] = true;
			$_SESSION['username'] = $Udata['firstname'];
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