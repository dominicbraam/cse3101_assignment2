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
						
			<form action="../controllers/search.php" method="POST">
				<input type="text" name="query" placeholder="Search posts..." maxlength="100"></input>
				<button name="search">Search</button>
			</form>

		</div>
	</body>
<html>
