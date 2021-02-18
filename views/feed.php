<?php

include_once '../controllers/PostsC.php';
include_once '../controllers/UsersC.php';

session_start();
?>

<html>
	<head>
		<title>
			Feed
		</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="navbar">
			<?php require 'navbar.php' ?>
		</div>
		<div class="container">
			<?php
				$postsObj = new PostsC();
				$usersObj = new UsersC();
				$posts = $postsObj->gatherPosts();
				foreach(array_reverse($posts) as $post){
					$username = $usersObj->getUsername($post->userid);
			?>
			<div class="post-item">
				<div class="username"><?php echo $username ?></div>
				<div class="post-body"><?php echo $post->body ?></div>
				<div class="date"><?php echo $post->date_created ?></div>
			</div>
			<?php
				}
			?>
		</div>
	</body>
<html>
