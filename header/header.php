<?php 
    require_once("./backend/db.php");
    ob_start();
    $user_id = $_SESSION['id'] ?? 0;                             
    $Uid = $_SESSION['userID'] ?? 0;                             
    $query = "SELECT * FROM signup_user where id= '$user_id'";
    $result= mysqli_query($connect, $query);
    
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
    <meta name="google-signin-client_id" content="800298839403-rigb41f1eepg1iv2ji4bia3lgufp51be.apps.googleusercontent.com.apps.googleusercontent.com">
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
                        <li class="useritem dropdown"><i class="far fa-bell" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                        <?php 

                             foreach($result as $data){	

                                if($data['action'] == 1): ?>
                                    <span class="user-badge badge bg-warning text-white">1</span>
                        <?php   endif; }?>


                            <ul class="dropdown-menu notification">
                                <?php 

                                    foreach($result as $data){	

                                        if($data['action'] == 1): ?>
                                            <li>Your Account has been approved by admin.</li>
                                    <?php endif;  
                                }?>
                            </ul>
                    
                        </li>
                        <li class="dropdown open useritem"> 
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user-circle" aria-hidden="true"></i> 
                            <?php 
                                echo $_SESSION['username'];
                            ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu custom-pad">
                                <li class="user-status"><?php 
                                
                                foreach($result as $data){	

                                    if($data['action'] == 1):

                                       echo "<span class='verify'><i class='fas fa-check-circle'></i>Verified</span>";
                                    else:
                                        echo "<span class='unverify'>Unverified</span>";
                                    endif;
                                } 

    // Total Message Count || Message checking
    $rCount = "SELECT * FROM messages where (sender !='$Uid' && seen='0') AND sender='1'";
	$resultCount= mysqli_query($connect, $rCount);
	// Total Message Count || Message checking

                                
                                ?>
                                </li>

                                <li class="position-relative"><a href="./messages.php">Messages
                                <?php
                                    $row = mysqli_num_rows($resultCount);
                                    if($row > 0){
                                        echo "<span class='messages user-badge badge bg-success text-white'>{$row}</span>";
                                    }
                                ?>
                               
                                
                                </a></li>
                                <li><a href="./form.php">Post Request</a></li>
                                <li><a href="./post.php">Your Post</a></li>
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

                    <?php if(isset($_SESSION['user'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="doner.php">Become a Doner</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="donor-list.php">Donor List</a>
                    </li>

                    <?php endif;?>

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