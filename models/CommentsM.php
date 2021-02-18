<?php

include_once 'Database.php';

class CommentsM extends Database {

	protected function getComments($postid){
		$sql = "SELECT * FROM comments WHERE postid = :postid";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['postid'=>$postid]);
		$arr = $stmt->fetchAll();
		$stmt = null;
		return $arr;
	}

	protected function setComment($postid,$body){
		$sql = "INSERT INTO comments (postid,body,date_created) VALUES (:postid,:body,NOW())";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['postid'=>$postid,'body'=>$body]);
	}
}
