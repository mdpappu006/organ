
    <!--footers-->
    <footer class="footers mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-xl-4">
                    <div class="footer-widgets">
                        <a class="navbar-brand order-2" href="index.php">
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
                        <?php if(!isset($_SESSION['user'])): ?>
                         <li>
                            <a href="./admin/">Admin Login</a>
                        </li>
                        <?php  endif;?>
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