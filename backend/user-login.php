<?php	
	require_once("db.php");
		if(isset($_POST['userLogin'])){
		$email = trim($_POST['email']);
		$userpass = $_POST['password'];
		if($email && $userpass){
			$query = "SELECT id,firstname ,email, pass FROM signup_user WHERE email ='{$email}'";
				$result= mysqli_query($connect, $query);
				$dt = mysqli_num_rows($result);

				if(mysqli_num_rows($result) > 0){
					$data = mysqli_fetch_assoc($result);
					$_password = $data['pass'];
					
					if($data){
						$p = password_verify($userpass, $_password);
						if($p == true){
							$_SESSION['user'] = true;
							$_SESSION['username'] = $data['firstname'];
						}else{
							echo "wrong Password";
						}
					}
				}
		}
	}
?>