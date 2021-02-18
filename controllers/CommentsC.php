<?php

include_once '../models/CommentsM.php';

class CommentsC extends CommentsM {
		public function gatherComments(){
			$results = $this->getComments();
			return $results;
			}

		public function createComment($postid,$body){
			$this->setPost($postid,$body);
		}
}
