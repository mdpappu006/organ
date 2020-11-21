    <!-- /.navbar -->
    <?php 
    	include_once('header/header.php');

    	// Doner list Query 
		$donerquery = "SELECT * FROM become_donor";
		$donerresult= mysqli_query($connect, $donerquery);
		// End Doner list Query 
    ?>
    <!-- /.navbar -->

    <main class="main-wrap">

        <!--cal-to-action-->
        <section class="call-to-action-sec style-two">
            <div class="actions-inner-sc" style="background: url(img/action-bg-2.png);">
                <div class="row justify-content-center m-0 p-0">
                    <div class="col-lg-6 col-md-10">
                        <h2>Check Our Donor List</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod  et dolore magna vero eos et accusam et justo duo dolores et ea rebum.</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--cal-to-action-->

        <!--organ-donors-action-->
        <section class="organ-donors-sec organ-donors-sec-1">
            <div class="container">
                <div class="organ-donors-sc">
                    <h3 class="organ-donors-title">Organ Donors</h3>
                    <div class="row">
                    <?php 
                    	foreach ($donerresult as $data): 
                    	if ($data['organs_donate']):
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-organ-donors-inner text-center">
                                <div class="thumb">
                                    <img src="img/donors/1.png" alt="img">
                                </div>
                                <div class="details">
                                    <h3><?php echo $data['firstname'] ." ". $data['lastname']?></h3>
                                    <ul class="meta">
                                        <li><span>Organ Type:</span> <?php echo $data['organs_donate'];?></li>
                                        <li><span>Numbers: </span><?php echo $data['phone'];?> </li>
                                        <li><?php echo $data['city']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php 
                    	endif;
                		endforeach;
                	?>
                    </div>
                </div>
            </div>
        </section>
        <!--organ-donors-action-->

        <!--organ-donors-action-->
        <section class="organ-donors-sec organ-donors-sec-1">
            <div class="container">
                <div class="organ-donors-sc">
                    <h3 class="organ-donors-title">Blood Donors</h3>
                    <div class="row">

                    <?php 
                    	foreach ($donerresult as $data): 
                    	if ($data['blood_donate']):
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-organ-donors-inner text-center">
                                <div class="thumb">
                                    <img src="img/donors/1.png" alt="img">
                                </div>
                                <div class="details">
                                    <h3><?php echo $data['firstname'] ." ".  $data['lastname']?></h3>
                                    <ul class="meta">
                                        <li><span>Organ Type:</span> <?php echo $data['blood_donate']. " (". $data['blood_group'] . ")" ?></li>
                                        <li><span>Numbers: </span><?php echo $data['phone'];?> </li>
                                        <li><?php echo $data['city']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php 
                    	endif;
                		endforeach;
                	?>

                    </div>
                </div>
            </div>
        </section>
        <!--organ-donors-action-->

    </main>

    <!--footers-->
    <?php include_once('header/footer.php') ;?>
    <!--footers-->