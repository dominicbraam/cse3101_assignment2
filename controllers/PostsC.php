<?php

include_once '../models/PostsM.php';

class PostsC extends PostsM {
		public function gatherPosts(){
			$results = $this->getPosts();
			return $results;
		}

		public function getOnePost($postid){
			$result = $this->getPost($postid);
			return $result;
		}

		public function createPost($userid,$body){
			$this->setPost($userid,$body);
		}
}
