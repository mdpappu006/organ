<!-- main nav start -->
<?php 
    require_once "backend/user-login.php";
    include_once('header/header.php') ;
?>
<!-- /.navbar -->

<?php if(!isset($_SESSION['user'])){ ?>

<main class="main-wrap">
    <!--forms-->
    <div class="form-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 mx-auto">
                    <div class="form-inside-all">
                        <form method="POST">
                            <div class="titles">
                                <h4>Find Your Account </h4>
                            </div>
                
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mb-3">Please enter your email address to search for your account.</p>

                                    <input type="text" placeholder="Email" name="email" required/>
                                    
                                    <div class="error">
                                        <?php 
                                            if(isset($passError)){
                                                echo "*Invalid Password";
                                            }
                                        ?>
                                    </div>
                                </div> 
                                
                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="userLogin">Login</button>
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

<?php  }else{
    header("location: index.php");
}
?>    

<!--footers-->
<?php include_once('header/footer.php') ;?>

<!--footers-->