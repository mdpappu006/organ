    <!-- main nav start -->
    <?php 
        include_once('header/header.php') ;
        include_once('backend/contact.php');
    ?>
    <!-- /.navbar -->

    <main class="main-wrap">

        <!--banner-->
        <section class="page-title-area text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 align-self-center">
                        <div class="bn-content-in">
                            <h1>HAVE SOME QUESTIONS?</h1> 
                            
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod  et dolore magna vero eos et accusam et justo duo dolores et ea rebum.</p>
                        </div><!--/.bn-content-in-->
                    </div>
                </div>
            </div><!--/.container-->
        </section>
        <!--banner-->

        <!--about-us-->
        <section class="contact-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="thumb">
                            <img src="img/contact.png" alt="img"/>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="contact-form">
                            <div class="bn-content-in">
                                <form method="POST">
                                    <input placeholder="First Name" name="fname" required>
                                    <input placeholder="Last Name" name="lname" required>
                                    <input placeholder="Phone Number" name="phone" required>
                                    <textarea rows="5" placeholder="Your Message" name="messages" required></textarea>
                                    <button type="submit" class="btn" name="contact-form">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </section>
        <!--about-us-->
    </main>

    <!--footers-->
    <?php include_once('header/footer.php') ;?>
    <!--footers-->