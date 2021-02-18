<?php

include_once 'Database.php';

class PostsM extends Database {

	protected function getPosts(){
		$sql = "SELECT * FROM posts";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();

		$arr = $stmt->fetchAll();
		if(!$arr) exit('No posts exist...');
		$stmt = null;
		return $arr;
	}

	protected function setPost($userid,$body){
		$sql = "INSERT INTO posts (userid,body,date_created) VALUES (:userid,:body,NOW())";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['userid'=>$userid,'body'=>$body]);
	}
}
