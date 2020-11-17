<!-- main nav start -->
<?php 
    require_once "backend/user-login.php";
    include_once('header/header.php') ;
?>
<!-- /.navbar -->
<main class="main-wrap">
    <!--forms-->
    <div class="form-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 mx-auto">
                    <div class="form-inside-all">
                        <form method="POST">
                            <div class="titles">
                                <h4>Login </h4>
                            </div>
                
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Email" name="email"/>
                                    <input type="password" placeholder="Password" name="password"/>
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

    <!--footers-->
    <?php include_once('header/footer.php') ;?>
    <!--footers-->