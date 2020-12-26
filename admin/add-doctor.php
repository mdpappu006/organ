<?php
error_reporting(0);
require_once("../backend/db.php");
$id = $_SESSION['userid'] ?? 0;
include_once("backend/add-doctor.php");

if(!$id){
    header("location: index.php");
    die();
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
	
	<title>Admin</title>

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
					
						<h2 class="page-title">Add Doctor</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Form fields</div>
									<div class="panel-body">

		<form method="post" class="form-horizontal">

  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }?>

  	        	   <?php 
                        if(isset($_SESSION['msg'])): 
                    ?>     
                        <div class="succWrap"><strong>SUCCESS</strong>:<?php echo "Doctor Added Successfully.";?> </div>
                    
                    <?php
                        unset($_SESSION["msg"]);
                        endif;
                    ?>

			<div class="form-group">
				<div class="col-sm-4">
					<label class="control-label mb-2">First Name</label>
					<input type="text" class="form-control" name="fname" id="name" required>
				</div>

				<div class="col-sm-4">
					<label class="control-label mb-2">Last Name</label>
					<input type="text" class="form-control" name="lname" required>
				</div>

				<div class="col-sm-4">
					<label class="control-label mb-2">Phone Number</label>
					<input type="number" class="form-control" name="phone" required>
				</div>	
			</div>

			<div class="form-group">
				<div class="col-sm-4">
					<label class="control-label mb-2">Address</label>
					<input type="text" class="form-control" name="address" required>
				</div>	

				<div class="col-sm-4">
					<label class="control-label mb-2">Email</label>
					<input type="email" class="form-control" name="email" required>
				</div>	

				<div class="col-sm-4">
					<label class="control-label mb-2">Password</label>
					<input type="text" class="form-control" name="password" required>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-4">
					<label class="control-label mb-2">Designation</label>
					<input type="text" class="form-control" name="designation" required>
				</div>				
			</div>
			
			<div class="form-group">
				<div class="col-sm-12">

					<button class="btn btn-primary" name="add-Doctor" type="submit">Add</button>
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