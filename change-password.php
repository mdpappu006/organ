<!-- main nav start -->
<?php 
    require_once "backend/forgot-pass.php";
    include_once('header/header.php') ;

    $id = $_SESSION['validuser'] ?? 0;

    if(!$id){
        header("location: forgot-password.php");
        die();
    }

?>
<!-- /.navbar -->

<?php if(!isset($_SESSION['user'])){ ?>



<main class="main-wrap">

  
        <!-- Password Changed Messages --> 
        <div class="container">
            <div class="row ">
                <div class="col-md-9 mx-auto">
                    <?php if(isset($_SESSION['changedmess'])):?>
                        <div class="alert alert-success" role="alert">
                            Your Password Has been Changed successfully.
                        </div>
                    <?php unset($_SESSION["changedmess"]);
                    endif;?> 
                </div>
            </div>
        </div>
        <!-- Failed Message -->

    <!--forms-->
    <div class="form-wrapper">

        <div class="container">
            <div class="row ">
                <div class="col-md-9 mx-auto">
                    <div class="form-inside-all">
                        <form method="POST">
                            <div class="titles">
                                <h4 class="border-bottom pb-2">Change you Password</h4>
                            </div>
                
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mt-3 mb-3"></p>

                                    <input type="hidden" name="email" value="<?php echo $email?>"/>
                                    <input type="password" placeholder="New Password" name="newpass" required/>
                                    <input type="password" placeholder="Confirm Password" name="confirmpass" required/>
                                    
                                    <div class="error">
                                        <?php 
                                            if(isset($passError)){
                                                echo "*Invalid Password";
                                            }
                                        ?>
                                    </div>
                                </div> 
                                
                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="change-pass"> Reset your Password</button>
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