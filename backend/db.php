<?php
	session_start();
	define("DB_HOST", "localhost:3306");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "organ");

	$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if(!$connect){
		mysqli_error($connect);
	}