<?php
	require 'dbHandler.php';
	require_once 'passwordHash.php';
	
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$db = new DbHandler();
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	$result = $db->getOneRecord("select name,password,email from user where email='$email'");
	if($result != null){
		if(passwordHash::check_password($result['password'],$password)){
			session_start();
			$result['info'] = 'Login Success';
			$_SESSION['userdata'] = $result;
			header("Location: /simple-twitter/main.php");
		} else $result['info'] = 'Incorrect Password';
	} else $result['info'] = 'No Such Email Registered';
	//header("Location: /simple-twitter/");
?>