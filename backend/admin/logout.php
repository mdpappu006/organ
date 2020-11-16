<?php 
    session_start();
    $_SESSION['userid'] = 0;
    session_destroy();
    header("location: ../../login.php");
?>