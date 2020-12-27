<?php
	require_once("../backend/db.php"); 
    $id = $_SESSION['userid'] ?? 0;
	if(!$id){
        header("location: doctor-login.php");
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
	
	<title>Doctor Dashboard</title>

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
	<?php include('includes/doctor-header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar-doctor.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Post Request</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Reg Users</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th>Address </th>
											<th>Contact no</th>
											<th>Required Organ</th>
											<th>Prescription</th>
											<th>Email</th>
											<th>Request For</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th>Address </th>
											<th>Contact no</th>
											<th>Required Organ</th>
											<th>Prescription</th>
											<th>Email</th>
											<th>Request For</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>


<?php 
    $query = "SELECT * FROM post_request";
	$result= mysqli_query($connect, $query);

foreach($result as $data)
{				

?>	

										<tr>
											<td> <?php echo $data['id']?></td>
											<td><?php echo $data['patientName']?></td>
											<td><?php echo $data['address']?></td>
											<td><?php echo $data['phone']?></td>
											<td><?php echo $data['requiredorgan']?></td>
											<td><a target="_blank" href="../prescription_photo/<? echo $data['prescription']?>"><img class='urprescription' src="../prescription_photo/<? echo $data['prescription']?>" alt=""></a></td>
											<td><?php echo $data['email']?></td>
											<td><?php echo $data['donate_user']?></td>
											<td> 

											<?php
											
$id = $data['id'];
if(isset($_REQUEST['eid'])){
	
	$eid=$_GET['eid'];
	$status="0";
	$query = "UPDATE post_request SET action=$status WHERE id=$eid";
	$Result =mysqli_query($connect, $query);
	header("location: doctor-post-request.php");
}
$id = $data['id'];
if(isset($_REQUEST['aeid'])){
	
	$aeid=$_GET['aeid'];
	$status=1;
	$query = "UPDATE post_request SET action=$status WHERE id=$aeid";
	$Result =mysqli_query($connect, $query);
	header("location: doctor-post-request.php");
}
								
											if($data['action'] == 1):
											?>	<a href="doctor-post-request.php?eid=<?php echo $id?>">Active</a> 
											<?php else:?>
											 <a href="doctor-post-request.php?aeid=<?php echo $id?>">Inactive</a></td>
											<?php endif;?>
										</tr>
<?php }?>

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
