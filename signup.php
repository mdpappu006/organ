<?php
    require_once "backend/user-signup.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signp </title>
    <!-- Standard Favicon -->
    <link rel="icon" href="img/fav/favicon-96x96.png">


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
    <nav class="navbar navbar-expand-lg center-brand static-nav">
        <div class="container">
            <a class="navbar-brand order-2" href="#">
               <h1>Organ<span>Donationbd</span></h1>

            </a>

            <div class="d-flex flex-row order-2 order-lg-3">
                <ul class="navbar-nav login-item flex-row">
                    <li class="nav-item">
                        <a class="nav-link " href="login.html">Login</a>
                    </li>
                    <li>or</li>
                    <li class="nav-item">
                        <a class="nav-link " href="signup.php">sign Up</a>
                    </li>

                </ul>
            </div>
            <button class="navbar-toggler navbar-toggler-right collapsed order-1" type="button" data-toggle="collapse" data-target="#xenav">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse order-3 order-lg-2" id="xenav">
                <ul class="navbar-nav ml-auto pr-5">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doner.html">Become a Doner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
        <!--/.CONTAINER-->

    </nav>
    <!-- /.navbar -->
<main class="main-wrap">
    <!--forms-->
    <div class="form-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-inside-all">
                        <form method="POST">
                            <div class="titles">
                                <h4>Inter your details for Signup</h4>
                            </div>
                  
                            <div class="row">
                               <div class="col-md-6">
                                    <input type="text" placeholder="First Name" name="fname" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" name="lname" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" placeholder="Phone Number" name="pnumber" required/>
                                </div>
                           
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="email" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="password" placeholder="password" name="pass" required/>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Address" name="address" required/>
                                </div>

                            	<div class="col-md-12 label-btn">
                                	<input type="radio" placeholder="Blood" id="blood" class="radio-btn" name="donation" value="blood" checked/>
                                	<label for="blood" class="pr-3">Blood</label>

                                	<input type="radio" placeholder="Organ" id="organ" class="radio-btn" name="donation" value="organ"/>
                                	<label for="organ">Organ</label>
                            	</div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="signup">Signup</button>
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