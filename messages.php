<?php 
    include_once('header/header.php') ;
    include_once('backend/post_request.php') ;
    $id = $_SESSION['user'] ?? 0;
    if(!$id){
        header("location: index.php");
        die();
    }

?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="messages.php" method="POST" class="chat-area">
                    <div class="chat-main">
                        <div class="admin-chat">
                            <div class="profile-left">
                                <span class="admin-profile"><b>A</b></span>
                            </div>

                            <div class="profile-info">
                                <div class="d-inline-block">
                                    <h6>Admin</h6>
                                    <p> Hi, How are you?</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="admin-chat user">
                            <div class="profile-left">
                                <span class="admin-profile"><b>NH</b></span>
                            </div>

                            <div class="profile-info ">
                                <div class="d-inline-block">
                                    <h6>Nazmul Hossain</h6>
                                    <p> Yeah, I am great. how about you?</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="admin-chat user">
                            <div class="profile-left">
                                <span class="admin-profile"><b>NH</b></span>
                            </div>

                            <div class="profile-info ">
                                <div class="d-inline-block">
                                    <h6>Nazmul Hossain</h6>
                                    <p> Yeah, I am great. how about you?</p>
                                </div>
                            </div>
                        </div>

                        <div class="admin-chat">
                            <div class="profile-left">
                                <span class="admin-profile"><b>A</b></span>
                            </div>

                            <div class="profile-info">
                                <div class="d-inline-block">
                                    <h6>Admin</h6>
                                    <p> Hi, How are you?</p>
                                </div>
                            </div>
                        </div>

                        <div class="admin-chat">
                            <div class="profile-left">
                                <span class="admin-profile"><b>A</b></span>
                            </div>

                            <div class="profile-info">
                                <div class="d-inline-block">
                                    <h6>Admin</h6>
                                    <p> Hi, How are you?</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="submit-user-chat">
                        <div class="chat-box">
                            <textarea name="" rows="3"></textarea>
                            <button class="btn btn-primary btn-chats">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!--footers-->
<?php include_once('header/footer.php') ;?>
<!--footers-->