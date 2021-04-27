<?php

// $q1 = "SELECT * FROM messages";
// $r1 = mysqli_query($connect, $q1);

// $msgid = $r1['msgid'];

// var_dump($msgid);
// die();


function message_left(){
    return "
    <div class='admin-chat'>
        <div class='profile-left'>
            <span class='admin-profile'><b> N </b></span>
            <h6> Nazmul </h6>
        </div>

        <div class='profile-info'>
            <div class='d-inline-block'>
                <p class='admin-u'> Test form User </p>
            </div>
        </div>
    </div>";
}


// function message_right(){

//     foreach ($result as $data){
//     return "
//     <div class='admin-chat user'>
//         <div class='profile-info'>
//             <div class='d-inline-block w-50'>
//                 <p class='current-user'>". $data['message'] ."</p>
//             </div>
//         </div>
//     </div>";
//     }
// }


?>