<?php

include_once 'Database.php';

class UsersM extends Database {

	protected function getUser($userid,$uname){
		$sql = "SELECT * FROM users WHERE username = :uname OR userid = :userid";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['uname'=>$uname,'userid'=>$userid]);

		$user = $stmt->fetch();
		$stmt = null;
		return $user;
	}

	protected function setUser($uname,$pw){
		$sql = "INSERT INTO users (username,password) VALUES (:uname,:pw)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['uname'=>$uname,'pw'=>$pw]);
	}
}
