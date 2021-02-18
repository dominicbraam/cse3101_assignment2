<?php

include_once '../controllers/CommentsC.php';
include_once '../controllers/UsersC.php';
include_once '../controllers/PostsC.php';

session_start();
?>

<html>

	<head>
		<title>
			Post
		</title>
	</head>

	<body>

		<div class="navbar">
			<?php require 'navbar.php' ?>
		</div>

		<div class="container">

			<?php
				$postObj = new PostsC();
				$userObj = new UsersC();
				$commentsObj = new CommentsC();
				$post = $postObj->getOnePost($_GET['postid']);
				$username = $userObj->getUsername($post->userid);
			?>
			<div class="post-item">
				<div class="username"><?php echo $username ?></div>
				<div class="post-body"><?php echo $post->body ?></div>
				<div class="date"><?php echo $post->date_created ?></div>
			</div>

			<h4 class="comments-header">Comments</h4>

			<?php
			$comments = $commentsObj->gatherComments($_GET['postid']);
			if(!$comments){
				echo "<div class='post-item comments'>No comments exist...</div>";
			}else{
				foreach(array_reverse($comments) as $comment){
			?>
			<div class="post-item comments">
				<div class="post-body"><?php echo $comment->body ?></div>
				<div class="date"><?php echo $comment->date_created ?></div>
			</div>
			<?php
				}
			}
			?>

			<?php
				if(isset($_SESSION['user'])){
					$commentObj = new CommentsC();
			?>
				<form class="comments-form" action="../controllers/createComment.php" method="POST">
					<textarea type="text" name="body" rows="3" cols="50" placeholder="Your comment..." maxlength="250"></textarea>
					<?php $postid = $_GET['postid'] ?>
					<input type="hidden" name="postid" value=<?php echo $postid ?> />
					<button name="comment">Comment</button>
				</form>
			<?php
			} else {
				echo "<div style='text-align:center;margin-top: 50px;'>You need to login before you can make a comment.</div>";
			}
			?>
		</div>
	</body>
</html>
