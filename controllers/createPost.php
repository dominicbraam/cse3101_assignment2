<?php

session_start();
include_once 'PostsC.php';
include_once 'UsersC.php';


if(isset($_POST['post'])){
	if(empty($_POST['body'])){
		header("location:../views/feed.php");
	} else {
		$postObj = new PostsC();
		$userObj = new UsersC();
		$userid = $userObj->getUserID($_SESSION['user']);
		$postObj->createPost($userid,$_POST['body']);
		header("location:../views/feed.php");
	}
}
