<?php
    if(isset($_POST['contact-form'])){

        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $phone = trim($_POST['phone']);
        $messages = trim($_POST['messages']);

        $query = "INSERT INTO contactus(fname,lname,phone,messages) values('$fname','$lname','$phone','$messages')";
        $result= mysqli_query($connect, $query);
        header("location: contact.php");
        // var_dump($query);

    }
