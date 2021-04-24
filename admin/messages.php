<?php
	require_once("../backend/db.php"); 
    include_once('backend/messages.php') ;
    $id = $_SESSION['userid'] ?? 0;
	if(!$id){
        header("location: index.php");
        die();
    }
	ob_start();
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
                    <input type="hidden" value="<?php echo $id;?>" name="userID">

                    <div class="chat-main">
                        

                        <?php 
                            $uid = $_GET['id'];
                            $query = "SELECT signup_user.id, signup_user.firstname, messages.formUser, messages.message FROM signup_user
                            INNER JOIN messages
                            ON signup_user.id=messages.formUser where formUser='$uid'";
                            $userquery = mysqli_query($connect, $query);


							foreach ($userquery as $data): 
                        
								?>
							   
								<div class="admin-chat">
									<div class="profile-left">
										<span class="admin-profile"><b>
											<?php 
												echo substr($data['firstname'], 0,1);
											?></b></span>
										<h6><?php echo $data['firstname'] ?></h6>
									</div>
		
									<div class="profile-info">
										<div class="d-inline-block">
											<p class="admin-u"> <?php echo $data['message'] ?> </p>
										</div>
									</div>
								</div>
		
							<?php 
								endforeach; 
							?>

						<?php
                            $Adminquery = "SELECT ToAdmin,message FROM messages where ToAdmin='$uid'";
                            $Aresult = mysqli_query($connect, $Adminquery);


                            foreach ($Aresult as $d): ?>

                            <div class="admin-chat user">
                                <div class="profile-info">
                                    <div class="d-inline-block w-50">
                                        <p class="current-user"> <?php echo $d['message']?></p>
                                    </div>
                                </div>
                            </div>


                        <?php  endforeach; ?>
                            
                     

                    </div>

                    <div class="submit-user-chat">
                        <div class="chat-box">
                            <textarea name="usermessages" rows="3" id="chat-text" required></textarea>
                            <button id="send" class="btn btn-primary btn-chats" name="message-send">Send</button>
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


</body>
</html>
