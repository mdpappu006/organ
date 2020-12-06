    <!-- main nav start -->
    <?php 
        include_once('header/header.php') ;
        include_once('backend/contact.php');

        $id = $_SESSION['user'] ?? 0;

        $query = "SELECT id,firstname, lastname, phone ,email, address FROM signup_user";
        $result = mysqli_query($connect, $query);
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
                        
                        <?php 
                            if(isset($_SESSION['message'])): 
                        ?>     
                        <p class="Smessage" style="margin-bottom: 10px;color: green;">Message has been sent.</p>
                        
                        <?php
                            unset($_SESSION["message"]);
                            endif;   

                            if(isset($_SESSION['error'])):
                        ?>
                            <p style="margin-bottom: 10px;color: red;"> Message failed to send!</p>
                        <?php 
                            unset($_SESSION["error"]);
                            endif; 
                        ?>

                        <?php
                            if(!$id){ 
                                if(isset($_SESSION['message'])): ?>
                                <p class="success" style="margin-bottom: 10px;color: green;">Message has been sent.</p>
                        <?php 
                            session_destroy();
                                endif;

                            if(isset($_SESSION['error'])):
                        ?>
                                <p style="margin-bottom: 10px;color: red;"> Message failed to send!</p>
                        <?php 
                            session_destroy();
                                 endif; 
                            }
                        ?>

<?php  

if($id):
while ($data = mysqli_fetch_assoc($result)) {
        $userid = $_SESSION['id'];
        if($userid == $data['id']){


?>

                    <div class="contact-form usercontact-form">
                        <div class="bn-content-in">
                            <form method="POST">
                                <input name="fname" value="<?php echo $data['firstname'];?>" readonly>
                                <input name="lname"  value="<?php echo $data['lastname'];?>"  readonly>
                                <input name="phone" value="<?php echo $data['phone'];?>" readonly>
                                <textarea rows="5" class="Umessages" placeholder="Your Message" name="messages" required></textarea>
                                <button type="submit" class="btn sendm" name="contact-form">Send Message</button>
                            </form>
                        </div>
                    </div>

<?php }
} 
endif;


if(!$id):

?>
                    <div class="contact-form">
                        <div class="bn-content-in">
                            <form method="POST">
                                <input name="fname" placeholder="First Name" required>
                                <input placeholder="Last Name" name="lname" required>
                                <input name="phone" placeholder="Phone" required>
                                <textarea rows="5" placeholder="Your Message" name="messages" required></textarea>
                                <button type="submit" class="btn" name="contact-form">Send Message</button>
                            </form>
                        </div>
                    </div>
<?php endif;?>


                    </div>
                </div>
            </div><!--/.container-->
        </section>
        <!--about-us-->
    </main>

    <!--footers-->
    <?php include_once('header/footer.php') ;?>
    <!--footers-->
