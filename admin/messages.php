<?php
	require_once("../backend/db.php"); 
    include_once('backend/messages.php') ;
    include_once('backend/chats.php') ;
    $id = $_SESSION['userid'] ?? 0;
	$urlID = $_GET['id'] ?? 0;
	if(!($id && $urlID)){
        header("location: index.php");
        die();
    }
	ob_start();

// var_dump($urlID);

	if($urlID){
		$urQ = "UPDATE messages SET seen='1' WHERE sender='$urlID'";
		$uRes =mysqli_query($connect, $urQ);

		echo "true";
	}
 ?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Admin Manage</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  
  <style>
	.errorWrap {
	    padding: 10px;
	    margin: 0 0 20px 0;
	    background: #fff;
	    border-left: 4px solid #dd3d36;
	    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
	.succWrap{
	    padding: 10px;
	    margin: 0 0 20px 0;
	    background: #fff;
	    border-left: 4px solid #5cb85c;
	    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
	.previous-back{
		font-size: 20px;
		margin-bottom: 15px;
		display: inline-block;
	}

	.fa-angle-left{
		font-size: 20px;
		margin-right: 15px;
	}
	</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Messages</h2>
						
						<a class="previous-back" href="messages-users.php"><i class="fa fa-angle-left"></i>Back</a>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Users Messages</div>
							<div class="panel-body">
								

                            <div class="container">
        <div class="row">

        <div class="col-md-12">
            <h4 class="mt-5 text-center">Messages</h4>
        </div>

            <div class="col-md-12">
                <form action="messages.php" method="POST" class="chat-area">
                    <input type="hidden" value="<?php echo $urlID;?>" name="userID">

                    <div class="chat-main" id="viewHere">
						<!-- Message left -->
						<?php 

							$query = "SELECT * FROM messages where(sender='1' && receiver='$urlID') OR (receiver='1' && sender='$urlID')";
							$result = mysqli_query($connect, $query);

							foreach ($result as $data){
                            	if($data['sender'] == '1'):
							?>
								<div class='admin-chat user'>
									<div class='profile-info'>
										<div class='d-inline-block w-50'>
											<p class='current-user'><?php echo $data['message'] ?></p>
										</div>
									</div>
								</div>

							<?php 
								else:
									$UserQ = "SELECT * FROM signup_user where userID='$urlID' limit 1";
									$UResult = mysqli_query($connect, $UserQ);
									foreach($UResult as $uname){
										$name =  $uname['firstname'];
									}
							?>
								<div class="admin-chat">
									<div class="profile-left">
										<span class="admin-profile"><b><?php echo substr($name, 0,1);?></b></span>
										<h6><?php 
												echo $name;
										?></h6>
									</div>
	
									<div class="profile-info">
										<div class="d-inline-block">
											<p class="admin-u"> <?php echo $data['message'] ?></p>
										</div>
									</div>
								</div>
							<?php	
							endif;
							} ?>
                    </div>

                    <div class="submit-user-chat">
                        <div class="chat-box">
                            <textarea name="usermessages" rows="3" id="message_text" required></textarea>
                            <button class="btn btn-primary btn-chats" name="message-send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

    <script>
        $(".chat-main").scrollTop($(".chat-main").prop('scrollHeight'));
    </script>   

    <script>

		// function _(element){
		// 	return document.getElementById(element);
		// }

		// function send_message(e){
		// 	var message_text = _("message_text");
		// 	// alert(message_text.value);
		// 	if(message_text.value.trim() == ""){
		// 		alert("please text something to send!");
		// 		return;
		// 	}

		// 	get_data({
		// 		message: message_text.value.trim(),
		// 		userid: CURRENT_CHAT_USER;
		// 	},"send_message");
		// }

		

    </script>   

	<script type="text/javascript">
        $(function() {
            startRefresh();
        });
        // function startRefresh() {
        //     setTimeout(startRefresh,1000);
        //     $.get('messages.php', function(data) {
        //         $('#viewHere').html(data);
        //     });
        // }
    </script>


</body>
</html>
