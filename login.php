<!-- main nav start -->
<?php 
    require_once "backend/user-login.php";
    include_once('header/header.php') ;
    ob_start();
?>
<!-- /.navbar -->

<?php if(!isset($_SESSION['user'])){ ?>

<main class="main-wrap">

        <!-- Failed Message --> 
        <div class="container">
            <div class="row ">
                <div class="col-md-9 mx-auto">
                    <?php if(isset($_SESSION['passError'])):?>
                        <div class="alert alert-danger" role="alert">
                            Invalid Password!
                        </div>
                    <?php unset($_SESSION["passError"]);
                        
                    endif;?> 
                </div>
            </div>
        </div>
        <!-- Failed Message --> 


    <!--forms-->
    <div class="form-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 mx-auto">
                    <div class="form-inside-all">
                        <form action="login.php" method="POST">
                            <div class="titles">
                                <h4>Login </h4>
                            </div>
                
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Email" name="email" required/>
                                    
                                    <input class="mb-2" type="password" placeholder="Password" name="password" required/>
                                    <div class="forget-pass d-block text-right">
                                        <a href="forgot-password.php">Forgot Password</a>
                                    </div>
                                    <div class="error">
                                        <?php 
                                            if(isset($passError)){
                                                echo "*Invalid Password";
                                            }
                                        ?>
                                    </div>
                                </div> 
                                
<!--                 
                                <div class="col-md-12">
                                    <a href="forget-pass.php">Forget Password</a>
                                </div> -->
                            
                                <div class="col-md-12">
                                    <div class="signinapi text-center">
                                        <button type="submit" class="btn d-block facebook"> <i class="fab fa-facebook"></i> Login with Facebook</button>
                                  
                                        <button type="submit" class="btn d-block google"> <i class="fab fa-google"> </i>Login with Google</button>
                                    </div>
                                    <p class="loginwith"><span class="or-left"></span> or <span class="or-right"></span></p>
                                </div>
                            </div>

                            
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn" name="userLogin">Login</button>
                            </div>
                        </form>
                    </div><!--/.form-inside-all-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--forms-->
</main>

<?php  }else{
    header("location: index.php");
}
?>    

<!--footers-->
<?php include_once('header/footer.php') ;?>

<!--footers-->