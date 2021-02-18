<?php

include_once '../models/CommentsM.php';

class CommentsC extends CommentsM {
		public function gatherComments($postid){
			$results = $this->getComments($postid);
			return $results;
		}

		public function createComment($postid,$body){
			$this->setComment($postid,$body);
		}
}
