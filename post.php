<?php 
	include_once("header/header.php");
	$id = $_SESSION['user'] ?? 0;
    if(!$id){
        header("location: index.php");
        die();
    }
    
	// Doner list Query 
	$donerquery = "SELECT * FROM post_request";
	$donerresult = mysqli_query($connect, $donerquery);
	// End Doner list Query 

?>
<main class="main-wrap">

        <!--organ-donors-action-->
        <section class="organ-donors-sec organ-donors-sec-1">
            <div class="container">
                <div class="organ-donors-sc">
                	<h3 class="organ-donors-title">Post Request</h3>

                    <div class="row">
                    	<?php 
                    		foreach ($donerresult as $data):  
                    		if($data['action'] == 1):
                    	?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-organ-donors-inner text-center">
                                <div class="thumb">
                                    <img src="img/donors/1.png" alt="img">
                                </div>
                                <div class="details">
                                    <h3><?php echo $data['patientName'];?></h3>
                                    <ul class="meta">
                                        <li><span>Organ Type:</span> <?php echo $data['requiredorgan'];?></li>
                                        <li><span>Numbers:</span> <?php echo $data['phone'];?></li>
                                        <li><?php echo $data['address'];?></li>
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


</div>


<?php 
	include_once("header/footer.php");
?>