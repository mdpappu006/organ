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
		$donation = $_POST['donation'];
		$insert = "INSERT INTO signup_user(firstname, lastname, phone, email, pass, address, donate_user) values('$fname', '$lname', '$phone', '$email', '$pass', '$address', '$donation')";
		$result = mysqli_query($connect, $insert);

        if($result){      
            $_SESSION['message'] = true;
            if($_SESSION['message']){
                header("location: signup.php");
                exit;
            }
        }else{
            $_SESSION['error'] = true;
            if($_SESSION['error']){
                header("location: signup.php");
                exit;
            }
        }
	}
?>	