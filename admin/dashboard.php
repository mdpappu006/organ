<?php
	session_start(); 
    $id = $_SESSION['userid'] ?? 0;
    if(!$id){
        header("location: index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Welcome</h2>
	<a href="logout.php">Logout</a>
</body>
</html>