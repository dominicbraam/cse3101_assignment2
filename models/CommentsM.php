<?php

include_once 'Database.php';

class CommentsM extends Database {

	protected function getComments(){
		$sql = "SELECT * FROM comments";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();

		$arr = $stmt->fetchAll();
		if(!$arr) exit('No comments exist...');
		$stmt = null;
		return $arr;
	}

	protected function setComment($postid,$body){
		$sql = "INSERT INTO comments (postid,body,date_created) VALUES (:postid,:body,NOW())";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['postid'=>$postid,'body'=>$body]);
	}
}
