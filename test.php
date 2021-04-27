<?php

    $id = hexdec(uniqid());
    $msgid = uniqid();
    var_dump($msgid);


    function message_left($data){
        return "
        <div class='admin-chat user'>
            <div class='profile-info'>
                <div class='d-inline-block w-50'>
                    <p class='current-user'> ".$data['message']. "</p>
                </div>
            </div>
        </div>";

    }

    function message_right($data){
        return "
        <div class='dmin-chat'>
            <div class='profile-left'>
                <span class='admin-profile'><b>".substr($data['firstname'], 0,1) ."</b></span>
                <h6>".$data['firstname']." </h6>
            </div>

            <div class='profile-info'>
                <div class='d-inline-block'>
                    <p class='admin-u'> Test form User </p>
                </div>
            </div>
        </div>";
    }