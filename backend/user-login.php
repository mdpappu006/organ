<?php	
	require_once("db.php");
	if(isset($_POST['userLogin'])){
		$email = trim($_POST['email']);
		$userpass = $_POST['password'];
		if($email && $userpass){
			$query = "SELECT id,userID, firstname ,email, pass FROM signup_user WHERE email ='{$email}'";
			$result= mysqli_query($connect, $query);
			
			if(mysqli_num_rows($result) > 0){
				$Udata = mysqli_fetch_assoc($result);
				$_password = $Udata['pass'];
				
				if($Udata){
					$p = password_verify($userpass, $_password);
					if($p == true){
						$_SESSION['user'] = true;
						$_SESSION['username'] = $Udata['firstname'];
						$_SESSION['id'] = $Udata['id'];
						$_SESSION['userID'] = $Udata['userID'];
					}else{
						$_SESSION['passError'] = true;
					}
				}
			}
		}
	}
?>