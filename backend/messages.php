<?php
	require_once("db.php");
	if(isset($_POST['message-send'])){
		$msgid = uniqid();
		$senderID = $_POST['userID'];
		$receiverID = "1";
		$messages = filter_input(INPUT_POST, 'usermessages' ,FILTER_SANITIZE_STRING);
		$date = date("Y-m-d H:i:s");

		$insert = "INSERT INTO messages(msgid, sender, receiver, message, date) values('$msgid', '$senderID','$receiverID', '$messages', '$date')";


		$result = mysqli_query($connect, $insert);
	
		if($result){      
			header("location: messages.php");
			exit;
        }else{
            header("location: messages.php");
            exit;
        }
	}
?>	