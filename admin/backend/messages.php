<?php
	if(isset($_POST['message-send'])){
		$Usermess = filter_input(INPUT_POST, 'usermessages' ,FILTER_SANITIZE_STRING);

		$UserID = $_POST['userID'];
		$insert = "INSERT INTO messages(ToAdmin, message) values('$UserID','$Usermess')";
		$result = mysqli_query($connect, $insert);

		if($result){      
			header("location: messages.php?id=$UserID");
			exit;
        }else{
            header("location: messages.php?id=$UserID");
            exit;
        }


	}
?>	