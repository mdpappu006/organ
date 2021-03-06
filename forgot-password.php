<!-- main nav start -->
<?php 
    require_once "backend/forgot-pass.php";
    include_once('header/header.php') ;
?>
<!-- /.navbar -->

<?php if(!isset($_SESSION['user'])){ ?>



<main class="main-wrap">

        <!-- Failed Message --> 
        <div class="container">
            <div class="row ">
                <div class="col-md-9 mx-auto">
                    <?php if(isset($_SESSION['notfound'])):?>
                        <div class="alert alert-danger" role="alert">
                            User Not Found! Please Enter a Valid Email Address...
                        </div>
                    <?php unset($_SESSION["notfound"]);
                        
                    endif;?> 
                </div>
            </div>
        </div>
        <!-- Failed Message -->        
        
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
                        <?php if(!isset($userfound)): ?>
                        <form method="POST">
                            <div class="titles">
                                <h4 class="border-bottom pb-2">Find Your Account </h4>
                            </div>
                
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mt-3 mb-3">Please enter your email address to search for your account.</p>

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
                                    <button type="submit" class="btn" name="forgot-pass">Search</button>
                                </div>
                            </div>
                        </form> 

                        <?php endif;?>

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