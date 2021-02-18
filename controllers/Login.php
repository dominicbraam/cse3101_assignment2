<?php

session_start();
include_once 'UsersC.php';

if(isset($_POST['login'])){
	if(empty($_POST['username']) || empty($_POST['password'])){
		header("location:../views/Login.php?noInput=Username AND password required");
	} else {
		$uLogin = new UsersC();
		$isValid = $uLogin->checkCredentials($_POST['username'],$_POST['password']);
		if(!$isValid){
			header("location:../views/Login.php?invalid=Invalid credentials");
		} else {
			$userid = $uLogin->getUserID($_POST['username']);
			$_SESSION['user'] = $_POST['username'];
			$_SESSION['userid'] = $userid;
			header("location:../views/feed.php");
		}
	}
}
