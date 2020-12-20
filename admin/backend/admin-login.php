<?php
	require_once("../backend/db.php");
		if(isset($_POST['adminLogin'])){
			$email = trim($_POST['email']);
			$userpass = password_hash($_POST['password'], PASSWORD_BCRYPT);

			if($email && $userpass){
				$query = "SELECT id,email, password FROM admin WHERE email ='{$email}'";
				$result= mysqli_query($connect, $query);
				$dt = mysqli_num_rows($result);
				if(mysqli_num_rows($result) > 0){
					$data = mysqli_fetch_assoc($result);
					$_password = $data['password'];
					if($data){
						$p = password_verify($_password, $userpass);
						if($p == true){
							$_SESSION['userid'] = $data['id'];
							$_SESSION['email'] = $data['email'];
							header("location: ./dashboard.php");
							die();
						}else{
							$passError = true;
						}
					}
				}else{
					$Emailerror = true;
				}
			}
	}
?>