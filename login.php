<?php
    require_once "backend/user-login.php";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login </title>

    <!--bootstrap v4.0.0-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--reset css-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">

    <!--fontawesome cdn-->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!--slick-->
    <link rel="stylesheet" href="css/slick.css"/>
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200:0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

</head>

<body>

    <!-- main nav start -->
    <?php include_once('header/header.php') ;?>
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
    <footer class="footers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="footer-widgets">
                          <a class="navbar-brand order-2" href="index.html">
               <h1>Organ<span>Donationbd</span></h1>

            </a>
                        <ul>
                            <li>
                                <img src="img/icon/home.png" alt=""/>
                                House-10, road-1, Dhaka-1214
                            </li>
                            <li>
                                <a href="mailto:admin@organdonationbd.com">
                                    <img src="img/icon/envelope.png" alt=""/>
                                    admin@organdonationbd.com
                                </a>
                            </li>
                        </ul>
                    </div><!--/.footer-widgets-->
                </div>
                <div class="col-md-2">
                    <div class="footer-widgets">
                    <h4>Pages</h4> 
                    <ul>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Donor List</a>
                        </li>
                        <li>
                            <a href="#">Donate</a>
                        </li>
                    </ul>
                    </div><!--/.footer-widgets-->
                </div>
                <div class="col-md-2">
                    <div class="footer-widgets">
                        <h4>Questions</h4> 
                        <ul>
                            <li>
                                <a href="#">How to Donate</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Faq</a>
                            </li>
                        </ul>
                    </div><!--/.footer-widgets-->
                </div>
                <div class="col-md-2">
                    <div class="footer-widgets">
                        <h4>Social</h4> 
                        <ul>
                            <li>
                                <a href="#">-Facebook</a>
                            </li>
                            <li>
                                <a href="#">-Twitter</a>
                            </li>
                            <li>
                                <a href="#">-Youtube</a>
                            </li>
                        </ul>
                    </div><!--/.footer-widgets-->
                </div>
                <div class="w-100"></div>
                <div class="col-12">
                    <div class="copyright-txt">
                        <p>@copyright 2020 Organdonate BD</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footers-->

    
    <!--jquery-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--popper js-->
    <script src="js/vendor/popper.min.js"></script>
    <!--bootstrap v4 js-->
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--slick-->
    <script src="js/vendor/slick.min.js"></script>
    <!--easing js-->
    <script src="js/vendor/easing.js"></script>
    <!--main script-->
    <script src="js/main.js"></script>

</body>
</html>