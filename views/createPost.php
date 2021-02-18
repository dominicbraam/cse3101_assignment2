<?php

include_once '../controllers/PostsC.php';
include_once '../controllers/UsersC.php';

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
			if(isset($_SESSION['user'])){
				$postObj = new PostsC();
		?>
				<form action="../controllers/createPost.php" method="POST">
					<textarea type="text" name="body" rows="6" cols="50" placeholder="Your message..." maxlength="250"></textarea>
					<button name="post">Post</button>
				</form>
		<?php
			} else {
				echo "<div style='text-align:center;margin-top: 50px;'>You need to login before you can make a post.</div>";
			}
		?>
		</div>
	</body>
</html>
