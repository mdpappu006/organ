<?php
    require_once "backend/admin-login.php";
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login </title>

    <!--bootstrap v4.0.0-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!--reset css-->
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">

    <!--fontawesome cdn-->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!--slick-->
    <link rel="stylesheet" href="../css/slick.css"/>
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200:0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

</head>

<body>
<main class="main-wrap">
    <!--forms-->
    <div class="form-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 mx-auto">
                    <div class="form-inside-all">
                        <form method="POST">
                            <div class="titles">
                                <h4>Admin Login</h4>
                            </div>
                
                            <div class="row">
                                <div class="col-md-12 admin">
                                    <input type="email" placeholder="Email" name="email" required/>
                                    <div class="error mb-4">
                                        <?php 
                                            if(isset($Emailerror)){
                                                echo "*Invalid Email Address";

                                            }
                                        ?>
                                    </div>
                                    <input type="password" placeholder="Password" name="password" class="mb-3" required/>

                                    <div class="error">
                                        <?php 
                                            if(isset($passError)){
                                                echo "*Invalid Password";
                                            }
                                        ?>
                                    </div>
                                </div>
                
                            
                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="adminLogin">Login</button>
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
    
    <!--jquery-->
    <script src="../js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--popper js-->
    <script src="../js/vendor/popper.min.js"></script>
    <!--bootstrap v4 js-->
    <script src="../js/vendor/bootstrap.min.js"></script>
    <!--slick-->
    <script src="../js/vendor/slick.min.js"></script>
    <!--easing js-->
    <script src="../js/vendor/easing.js"></script>
    <!--main script-->
    <script src="../js/main.js"></script>

</body>
</html>
