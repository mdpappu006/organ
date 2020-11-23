<?php
    $url = basename(pathinfo($_SERVER['PHP_SELF'])['basename'],".php");
    if($url == 'index'){
        echo "Home";
    }elseif($url == 'about'){
        echo "About";
    }elseif($url == 'contact'){
        echo "Contact Us";
    }elseif($url == 'doner'){
        echo "doner";
    }elseif($url == 'login'){
        echo "login";
    }elseif($url == 'signup'){
        echo "Sign up";
    }elseif($url == 'donor-list'){
        echo "donor list";
    }elseif($url == 'form'){
        echo "form";
    }elseif($url == 'post'){
        echo "Your Post";
    }elseif($url == 'doner-form'){
        echo "Doner List";
    }
?> 