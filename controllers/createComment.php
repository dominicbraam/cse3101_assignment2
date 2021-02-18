<?php

session_start();
include_once 'CommentsC.php';
include_once 'UsersC.php';


if(isset($_POST['comment'])){
	if(empty($_POST['body'])){
		header("location:../views/index.php");
	} else {
		$commentObj = new CommentsC();
		$userObj = new UsersC();
		$postid = (int)$_POST['postid'];
		$commentObj->createComment($postid,$_POST['body']);
		header("location:../views/index.php");
	}
}
