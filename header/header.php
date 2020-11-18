<?php 
    require_once("./backend/db.php");
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?php include_once('title.php');?>
    </title>

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
            <a class="navbar-brand order-2" href="index.php">
               <h1>Organ<span>Donationbd</span></h1>
            </a>

            <div class="d-flex flex-row order-2 order-lg-3">
                <?php if(!isset($_SESSION['user'])): ?>

                <ul class="navbar-nav login-item flex-row">
                    <li class="nav-item">
                        <a class="nav-link " href="login.php">Login</a>
                    </li>
                    <li>or</li>
                    <li class="nav-item">
                        <a class="nav-link " href="signup.php">sign Up</a>
                    </li>

                </ul>

                <?php else: ?>

                <div class="header_wrap">
                    <div class="user_login">
                      <ul>
                        <li class="dropdown open"> 
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user-circle" aria-hidden="true"></i> 
                            php<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php">Profile Settings</a></li>
                                <li><a href="update-password.php">Update Password</a></li>
                                <li><a href="my-booking.php">My Booking</a></li>
                                <li><a href="./backend/logout.php">Sign Out</a></li>
                            </ul>
                        </li>
                      </ul>
                    </div>
                </div>

                <?php endif ;?>
            </div>



            <button class="navbar-toggler navbar-toggler-right collapsed order-1" type="button" data-toggle="collapse" data-target="#xenav">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse order-3 order-lg-2" id="xenav">
                <ul class="navbar-nav ml-auto pr-5">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doner.php">Become a Doner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
        <!--/.CONTAINER-->

    </nav>
    <!-- /.navbar -->