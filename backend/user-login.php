<?php
	require_once("db.php");
		if(isset($_POST['userLogin'])){
		$email = trim($_POST['email']);
		$userpass = $_POST['password'];
		
		$result = mysqli_query($connect, $insert);
		header("location: backend/admin/dashboard.php");
	}
?>