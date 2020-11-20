<!-- /.navbar -->
<?php 
    include_once('header/header.php') ;

    $id = $_SESSION['user'] ?? 0;
    if(!$id){
        header("location: index.php");
        die();
    }
?>
<!-- /.navbar -->

<main class="main-wrap">

    <!--banner-->
    <section class="page-title-area donor-page-bg text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 align-self-center">
                    <div class="bn-content-in">
                        <h1>Become a Donor</h1> 
                        
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod  et dolore magna vero eos et accusam et justo duo dolores et ea rebum.</p>
                    </div><!--/.bn-content-in-->
                </div>
            </div>
        </div><!--/.container-->
    </section>
    <!--banner-->

    <!--forms-->
    <div class="donor-form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-inside-all">
                        <form method="POST">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="titles">
                                        <h4>Personal Details</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First Name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Age"/>
                                        </div>
                                              <div class="col-md-6">
                                            <input type="email" placeholder="Email"/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Phone Number"/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Address"/>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="City"/>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="gender-area">
                                                <div class="titles">
                                                    <h4>Gender</h4>
                                                </div> 
                                                <div class="rd-btns">
                                                    <label>Male
                                                        <input type="radio" checked name="radio" value="organ">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label>Female
                                                        <input type="radio" name="radio" value="blood">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="gender-area">
                                                <div class="titles">
                                                    <h4>Your Blood Group</h4>
                                                </div> 
                                                <input type="text" placeholder="Enter Blood Group"/>
                                            </div>                                            
                                        </div>

                                        <div class="col-md-12">
                                            <h4>Blood Donate</h4>
                                            <label>Blood
                                                <input type="checkbox" name="eyes" id="eyes" value="eyes">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="organ-area">

                                                <div class="titles">
                                                    <h4>Organs that you wish to donate</h4>
                                                </div>
                                                <label>Eyes
                                                    <input type="checkbox" name="eyes" id="eyes" value="eyes">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label>Tissues
                                                    <input type="checkbox" name="tissues" id="tissues" value="tissues">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label>kidney
                                                    <input type="checkbox" name="kidney" id="kidney" value="kidney">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <label>lung
                                                    <input type="checkbox" name="lung" id="lung" value="lung">
                                                    <span class="checkmark"></span>
                                                
                                                </label>

                                                <label>plasma
                                                    <input type="checkbox" name="plasma" id="plasma" value="plasma">
                                                    <span class="checkmark"></span>
                                                </label>

                                                <div class="row">
                                              
                                                <div class="col-md-12">
                                                        <label>Any Part of My Body
                                                            <input type="checkbox" name="radio" id="dody" value="body">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>LIVING DONATE
                                                            <input type="checkbox" name="radio" id="living" value="living">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label> Yes, I agree to <span>Organdonation BD</span> Privacy Policy and Terms of Use
                                                            <input type="checkbox" name="policy" id="policy" value="policy" required class="term-policy">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                      

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="titles">
                                        <h4>Emergency Contact</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Name"/>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Relationship"/>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Phone Number"/>
                                        </div>
                                           <div class="col-md-12">
                                            <input type="email" placeholder="Email"/>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Address"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn mt-5">Send</button>
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
    <!--footers