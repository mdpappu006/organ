<?php
    if(isset($_POST['contact-form'])){
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $phone = trim($_POST['phone']);
        $messages = filter_input(INPUT_POST, 'messages' ,FILTER_SANITIZE_STRING);
        $query = "INSERT INTO contactus(fname,lname,phone,messages) values('$fname','$lname','$phone','$messages')";
        $result = mysqli_query($connect, $query);

        if($result){      
            $_SESSION['message'] = true;
            if($_SESSION['message']){
                header("location: contact.php");
                exit;
            }
        }else{
            $_SESSION['error'] = true;
            if($_SESSION['error']){
                header("location: contact.php");
                exit;
            }
        }
    }
?>
