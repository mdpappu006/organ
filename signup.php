<!-- main nav start -->
<?php 
    require_once "backend/user-signup.php";
    include_once('header/header.php') ;
?>
<!-- /.navbar -->
<main class="main-wrap">
    <!--forms-->

   <!-- <p> Regsitration Successful</p> -->
   
    <div class="form-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-inside-all">
                        <form method="POST">
                            <div class="titles">
                                <h4>Enter your details for Signup</h4>
                            </div>
                  
                            <div class="row">
                               <div class="col-md-6">
                                    <input type="text" placeholder="First Name" name="fname" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" name="lname" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" placeholder="Phone Number" name="pnumber" required/>
                                </div>
                           
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="email" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="password" placeholder="password" name="pass" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Address" name="address" required/>
                                </div>

                            	<div class="col-md-12 label-btn">
                                	<input type="radio" placeholder="Blood" id="blood" class="radio-btn" name="donation" value="blood" checked/>
                                	<label for="blood" class="pr-3">Blood</label>

                                	<input type="radio" placeholder="Organ" id="organ" class="radio-btn" name="donation" value="organ"/>
                                	<label for="organ">Organ</label>
                            	</div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="signup">Signup</button>
                                </div>
                            </div>
                        </form>
                    </div><!--/.form-inside-all-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--forms-->
</main>

<!--footers-->
<?php include_once('header/footer.php') ;?>
<!--footers-->