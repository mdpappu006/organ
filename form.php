     <!-- main nav start -->
    <?php 
        include_once('header/header.php') ;
        include_once('backend/post_request.php') ;
        $id = $_SESSION['user'] ?? 0;
        if(!$id){
            header("location: index.php");
            die();
        }
    ?>
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
                                <h4>Post Request For</h4>
                            </div>
                            <div class="rd-btns">
                                <label>Organ
                                    <input type="radio" checked name="radio" value="organ">
                                    <span class="checkmark"></span>
                                </label>
                                <label>Blood
                                    <input type="radio" name="radio" value="blood">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Patient name" name="patientName" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Address" name="address" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" placeholder="Contact No" name="phone" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Required organ" name="organ" />
                                </div>
                                <div class="col-md-6">
                                    <input type="file" placeholder="Upload Prescription" name="prescription"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="email" />
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="postRequest">Send</button>
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