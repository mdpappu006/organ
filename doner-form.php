<?php
	include_once('header/header.php') ;
    include_once('backend/become-donar.php') ;

?>

<style>
	.page-title {
	    border-bottom: 1px solid #f0f0f0;
	    font-size: 30px;
    	margin-top: 30px;
    	margin-bottom: 30px;
	}
</style>

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Doner List</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th>Contact no</th>
											<th>Address</th>
											<th>Donate</th>
										</tr>
									</thead>

									<tbody>

<?php 

	if(isset($_POST['search-doner'])){
		$doner = $_POST['search-d'];
		$query = "SELECT id, firstname, phone, adress , blood_group, organs_donate FROM  become_donor WHERE blood_group LIKE '%$doner%' OR organs_donate LIKE '%$doner%'";
		$result= mysqli_query($connect, $query);

foreach($result as $data)
{				

?>	
	<?php if($data['blood_group'] == $doner): ?>						
										<tr>
											<td> <?php echo $data['id']?></td>
											<td> <?php echo $data['firstname']?></td>
											<td> <?php echo $data['phone']?></td>
											<td> <?php echo $data['adress']?></td>
											<td> <?php echo $data['blood_group']?></td>
										</tr>
	<?php endif; ?>	


	<?php if($data['organs_donate'] == $doner): ?>	
										<tr>
											<td> <?php echo $data['id']?></td>
											<td> <?php echo $data['firstname']?></td>
											<td> <?php echo $data['phone']?></td>
											<td> <?php echo $data['adress']?></td>
											<td> <?php echo $data['organs_donate']?></td>
										</tr>
	<?php endif;?>

<?php }

}

?>
										

									</tbody>
								</table>
							</div>
						</div>

					

					</div>
				</div>

			</div>

<!--footers-->
<?php include_once('header/footer.php') ;?>
<!--footers