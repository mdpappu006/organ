<?php 
    require_once "backend/user-signup.php";
    include_once('header/header.php') ;
?>

    <?php 
        if(isset($_SESSION['error'])):
    ?>
    <p class="errorReg"> Registration Failed!</p>
    <?php 
        session_destroy();
        endif; 
    ?>

        <div class="container" style="margin: 140px auto">
            <div class="row">
                <div class="col-sm-4 mt-4">
                    <div class="cart-ac cart-wc">
                        <div class="cart-ac-cont">
                            <div class="t-title gen">
                                <h2>User Account</h2>
                            </div>
                            <div class="p-examp">
                                Post, Donate Request, Messages, See All Post.
                            </div>

                            <div class="ca-btn wc mt-3">
                                <div class="btn create-acc"><a href="signup.php" class="text-white"> Create Account</a></div>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="col-sm-4 mt-4">
                    <div class="cart-ac cart-wc">
                        <div class="cart-ac-cont">
                            <div class="t-title gen">
                                <h2>Hospital Account</h2>
                            </div>
                            <div class="p-examp">
                                Post, Donate Request, Messages, See All Post.
                            </div>

                            <div class="ca-btn wc mt-3">
                                <div class="btn create-acc"><a href="signup-hospital.php" class="text-white"> Create Account</a></div>
                            </div>
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4 mt-4">
                    <div class="cart-ac cart-wc">
                        <div class="cart-ac-cont">
                            <div class="t-title gen">
                                <h2>Clinic Account</h2>
                            </div>
                            <div class="p-examp">
                                Post, Donate Request, Messages, See All Post.
                            </div>

                            <div class="ca-btn wc mt-3">
                                <div class="btn create-acc"><a href="signup-clinic.php" class="text-white"> Create Account</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
</main>

<!--footers-->
<?php include_once('header/footer.php') ;?>
<!--footers-->