
    <!-- main nav start -->
    <?php include_once('header/header.php') ;?>
    <!-- /.navbar -->
<main class="main-wrap">
    <!--forms-->
    <div class="form-wrapper">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-inside-all">
                        <form>
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
                                    <input type="text" placeholder="Patient name"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Address"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Contact No"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Required organ"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Upload Prescription"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email"/>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn">Send</button>
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