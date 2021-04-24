<?php 
    include_once('header/header.php') ;
    include_once('backend/messages.php') ;
    $id = $_SESSION['user'] ?? 0;
    $user_id = $_SESSION['id'] ?? 0;
    if(!$id){
        header("location: index.php");
        die();
    }

?>

    <div class="container">
        <div class="row">

        <div class="col-md-12">
            <h4 class="mt-5 text-center">Messages</h4>
        </div>

            <div class="col-md-12">
                <form action="messages.php" method="POST" class="chat-area">
                    <input type="hidden" value="<?php echo $user_id;?>" name="userID">

                    <div class="chat-main">
                        <!-- <div class="admin-chat">
                            <div class="profile-left">
                                <span class="admin-profile"><b>A</b></span>
                                <h6>Admin</h6>
                            </div>

                            <div class="profile-info">
                                <div class="d-inline-block">
                                    <p class="admin-u"> Hi, How are you?</p>
                                </div>
                            </div>
                        </div> -->

                        <?php 
                            $query = "SELECT * FROM messages where formUser='$user_id'";
                            $result = mysqli_query($connect, $query);
                            foreach ($result as $data): 
                        
                        ?>
                        <div class="admin-chat user">
                            <div class="profile-info">
                                <div class="d-inline-block w-50">
                                    <p class="current-user"> <?php echo $data['message'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>

                    <div class="submit-user-chat">
                        <div class="chat-box">
                            <textarea name="usermessages" rows="3" id="chat-text" required></textarea>
                            <button id="send" class="btn btn-primary btn-chats" name="message-send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!--footers-->
<?php include_once('header/footer.php') ;?>
<!--footers-->


<script>
    $(".chat-main").scrollTop($(".chat-main").prop('scrollHeight'));
</script>