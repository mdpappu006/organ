<?php include_once('header/header.php') ;

    $query = "SELECT * FROM become_donor";
    $result= mysqli_query($connect, $query);

    $o = 0;
    $b = 0;
    foreach ($result as $data){
        $blood = $data['blood_donate'];
        $organ = $data['organs_donate'];

        if($blood === '' || $blood === NULL){
            $blood = 0;
        }else{
            $b += 1;
        } 

        if($organ === '' || $organ === NULL){
            $organ = 0;
        }else{
            $o += 1;
        }
    }
?>

    <main class="main-wrap">

        <!--banner-->
        <section class="banner-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bn-content-in">
                            <h1>It Needs lives to
                            <span>save</span> lives.</h1>
                            <p>By donating your organs and tissue after you die, you can save or improve as many as 75 lives. Many families say that knowing their loved one helped save.</p>
                            
                            <form method="POST" action="doner-form.php">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="search" placeholder="Enter Donate Organ Or Blood Type" name="search-d" required/>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn" name="search-doner">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--/.bn-content-in-->
                    </div>
                    <div class="col-md-6">
                    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>


  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg3.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/bg1.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/bg2.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
                    </div>
                </div>
            </div><!--/.container-->
        </section>
        <!--banner-->

        <!--fun-fact-->
        <section class="fun-facts-sec">
            <div class="container">
                <div class="ddd">
                    <div class="row">
                        <div class="col-md-10 mx-auto fun-inside-bg">
                                <div class="row ">
                                    
                                <div class="col-md-6  d-flex justify-content-center">
                                         <div class="single-facts">
                                <div class="icon">
                                    <img src="img/icon/facts1.png" alt=""/>
                                </div>
                                <div class="text">
                                    <h4><?php echo $o?></h4>
                                    <p>organ donor</p>
                                </div>
                            </div>
                                </div>
                                    <div class="col-md-6 d-flex justify-content-center">
                            <div class="single-facts">
                                <div class="icon">
                                    <img src="img/icon/facts1.png" alt=""/>
                                </div>
                                <div class="text">
                                    <h4><?php echo $b;?></h4>
                                    <p>Blood donor</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    
                <!--         <div class="col-md-4">
                            <div class="single-facts">
                                <div class="icon">
                                    <img src="img/icon/facts1.png" alt=""/>
                                </div>
                                <div class="text">
                                    <h4>1k</h4>
                                    <p>organ donor</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div><!--/.fun-inside-bg-->
            </div><!--/.container-->
        </section>
        <!--fun-fact-->

        <!--about-us-->
        <section class="about-us-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-left-img">
                            <img src="img/about.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-right-txt">
                            <h5>|| About Us ||</h5>
                            <h2>Donate <span>Organ</span> &
                            <span>Blood</span>  For Life</h2>
                            <h5 class="scned"><span> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</span></h5>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et</p>
                            <button type="button" class="btn">More Details</button>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </section>
        <!--about-us-->

        <!--become-donor-->
        <div class="become-donor-sec">
            <div class="container">
                <div class="donor-ins-bg">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="orgnas-single-dv">
                                <div class="icon">
                                    <img src="img/icon/donor1.png" alt=""/>
                                </div>
                                <div class="text">
                                    <p>Become a </p>
                                    <h3>Organ Donor</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="orgnas-single-dv">
                                <div class="icon">
                                    <img src="img/icon/donor2.png" alt=""/>
                                </div>
                                <div class="text">
                                    <p>Become a </p>
                                    <h3>Blood Donor</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.donor-ins-bg-->
            </div><!--/.container-->
        </div>
        <!--become-donor-->

        <!--cal-to-action-->
        <section class="call-to-action-sec mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="actions-inner-sc">
                            <h2>Join our action!<br>
                                Everyone can help.</h2>
                            <div class="btns-group">
                                <button type="button" class="btn">Donate Now</button>
                                <a href="form.php"><button type="button" class="btn">Post Request</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </section>
        <!--cal-to-action-->

    </main>

    <!--footers-->
    <?php include_once('header/footer.php') ;?>
    <!--footers-->