<?php	
	require_once("db.php");
	
	if(isset($_POST['forgot-pass'])){
		$email = trim($_POST['email']);
		if($email){
			$query = "SELECT id ,email, phone FROM signup_user WHERE email ='{$email}'";
			$result= mysqli_query($connect, $query);

			if(mysqli_num_rows($result) > 0){
				$userdata = mysqli_fetch_assoc($result);
				$user = $userdata['id'];

				if($user){
					$_SESSION['validuser'] = $userdata['id'];
					$_SESSION['validemail'] = $userdata['email'];
					header("location: ./change-password.php");
					exit();
				}

			}else{
				$_SESSION['notfound'] = true;

				if($_SESSION['notfound']){
					header("location: ./forgot-password.php");
					exit();
				}

			}
		}
	}


	// Changed Password
	if(isset($_POST['change-pass'])){

		$newpass = filter_input( INPUT_POST, 'newpass', FILTER_SANITIZE_STRING );
		$confirmpass = filter_input( INPUT_POST, 'confirmpass', FILTER_SANITIZE_STRING );
		$hashpass= password_hash($newpass, PASSWORD_BCRYPT);
		$pass = password_verify($confirmpass, $hashpass);
		
		$email = $_SESSION['validemail'];

		if($pass && $email){

			// change password query

			$query = "UPDATE signup_user set pass='{$hashpass}' where email='{$email}'";
			$result= mysqli_query($connect, $query);

			$_SESSION['changedmess'] = true;
			header("location: ./change-password.php");
			exit();

		}else{
			$_SESSION['passError'] = true;
		}
	}

?>