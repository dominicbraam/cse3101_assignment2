<?php

include_once '../models/UsersM.php';

class UsersC extends UsersM{

	public function createUser($uname,$pw){
		$this->setUser($uname,$pw);
	}

	public function getUserID($uname){
		$user = $this->getUser("NULL",$uname);
		$userid = $user->userid;
		return $userid;
	}

	public function getUsername($userid){
		$user = $this->getUser($userid,"NULL");
		$username = $user->username;
		return $username;
	}

	public function checkCredentials($uname,$pw){
		$result = $this->getUser("NULL",$uname);
		if($result){
			if($pw==$result->password){
				return true;
			}else{
				return false;
			}
		}
	}

}
