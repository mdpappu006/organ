<!-- main nav start -->
<?php 
    require_once "backend/create-account.php";
    include_once('header/header.php') ;
?>
<!-- /.navbar -->
<main class="main-wrap">
    <!--forms-->
    <div class="form-wrapper">

    <?php 
        if(isset($_SESSION['error'])):
    ?>
    <p class="errorReg"> Registration Failed!</p>
    <?php 
        session_destroy();
        endif; 
    ?>

        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-inside-all">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="titles">
                                <h4> Signup for Clinic</h4>
                            </div>
                  
                            <div class="row">
                               <div class="col-md-6">
                                    <input type="text" placeholder="Clinic Name" name="fname" required />
                                </div>
                           
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="email" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="number" placeholder="Phone Number" name="pnumber" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="password" placeholder="password" name="pass" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Address" name="address" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="file" placeholder="Upload Trade license" name="nid_card" required>
                                    <label class="up-pre">*Trade License</label>
                                </div>

                                <input type="hidden" value="clinic" name="clinic_name">

                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="signupClinic">Signup</button>
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