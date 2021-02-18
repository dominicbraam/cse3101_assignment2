<?php

include_once 'Database.php';

class PostsM extends Database {

	protected function getPosts(){
		$sql = "SELECT * FROM posts";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		$stmt = null;
		return $arr;
	}

	protected function getPost($postid){
		$sql = "SELECT * FROM posts WHERE postid = :postid";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['postid'=>$postid]);
		$arr = $stmt->fetch();
		$stmt = null;
		return $arr;
	}

	protected function setPost($userid,$body){
		$sql = "INSERT INTO posts (userid,body,date_created) VALUES (:userid,:body,NOW())";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['userid'=>$userid,'body'=>$body]);
	}
}
