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

			<div>
				<?php
					if(isset($_SESSION['user'])){
				?>
						<form action="../controllers/createPost.php" method="POST">
							<textarea type="text" name="body" rows="3" cols="50" placeholder="Your message..." maxlength="250"></textarea>
							<button name="post">Post</button>
						</form>
				<?php
					} else {
						echo "<div class='prompt'>You need to login before you can make a post.</div>";
					}
				?>
			</div>

			<?php
				$postsObj = new PostsC();
				$usersObj = new UsersC();
				$posts = $postsObj->gatherPosts();
				if(!$posts){
					echo "<div class='prompt'>No posts exist...</div>";
				} else {
				foreach(array_reverse($posts) as $post){
					$username = $usersObj->getUsername($post->userid);
			?>
			<div class="post-item">
				<div class="username"><?php echo $username ?></div>
				<div class="post-body"><?php echo $post->body ?></div>
				<div class="date"><?php echo $post->date_created ?></div>
				<div class="btn-comment"><a href="post.php?postid=<?php echo $post->postid ?>">Comments</a></div>
			</div>
			<?php
					}
				}
			?>

		</div>
	</body>
<html>
