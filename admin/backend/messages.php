<?php
	if(isset($_POST['message-send'])){
		$msgid = uniqid();
		$senderID = $_SESSION['userid'];
		$receiverID = $_POST['userID'];
		$messages = filter_input(INPUT_POST, 'usermessages' ,FILTER_SANITIZE_STRING);
		$date = date("Y-m-d H:i:s");

		$insert = "INSERT INTO messages(msgid, sender, receiver, message, date) values('$msgid', '$senderID','$receiverID', '$messages', '$date')";

		$result = mysqli_query($connect, $insert);
		if($result){      
			header("location: messages.php?id=$receiverID");
			exit;
        }else{
            header("location: messages.php?id=$receiverID");
            exit;
        }


	}
?>	