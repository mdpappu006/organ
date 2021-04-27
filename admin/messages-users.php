<?php
	require_once("../backend/db.php");
    $id = $_SESSION['userid'] ?? 0;
	// $userID = $_SESSION['userID'] ?? 0;
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

	.messages-suc{
		color: #ffffff;
    	background-color: #37A001;
		font-size: 13px;
		line-height: 14px;
		font-weight: 900;
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
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>User List</th>
											<th>Total Messages</th>
											<th> Name</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>User List</th>
											<th>Total Messages</th>
											<th> Name</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>

<?php 
    $query = "SELECT * FROM signup_user";
	$result= mysqli_query($connect, $query);
	

	// user ID Query
    $Uquery = "SELECT * FROM messages where receiver !='1'";
	$Uresult= mysqli_query($connect, $Uquery);
	// foreach($Uresult as $userid){
	// 	$userid[] = $userid['receiver'];
	// }
	// user ID Query
	



	// Total Message Count 
    $rCount = "SELECT * FROM messages where (receiver !='1'  AND seen='0')";
	$resultCount= mysqli_query($connect, $rCount);
	// $row = mysqli_num_rows($resultCount);
	// Total Message Count 
	





	
// var_dump($userID);
// var_dump($row);

	foreach($result as $data):
	$userID = $data['userID'];
?>	

										<tr>
											<td> <?php echo $data['id'] ;?> </td>
											<td class="text-center"> 
											<?php 
												$rCount = "SELECT * FROM messages where (sender !='1' && seen='0') AND sender='$userID'";
												$resultCount = mysqli_query($connect, $rCount);
												$row = mysqli_num_rows($resultCount);
												

												if($row > 0):
																									
											?>
												<button type="button" class="btn btn-success messages-suc">
													<?php echo $row ;?>
												</button> 
											<?php 
												else:
													echo "No messages from user!";
												endif;
											?>
											</td>
											<td> <?php echo $data['firstname'] ;?></td>
											<td><a href="messages.php?id=<?php echo $userID?>">Live Chat</a></td>
									
										</tr>
<?php ?>

<input type="hidden" value="<?php echo $userID;?>" name="userID">

<?php endforeach;?>		
									</tbody>
								</table>
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
</body>
</html>
