<html>

	<head>
		<title>Login</title>
		<link rel="stylesheet" href="/css/style.css">
	</head>

	<body>

		<div class="navbar">
				<?php require 'navbar.php' ?>
		</div>

		<div class="container">
			<form action="../controllers/login.php" method="POST">
				<?php
					if(@$_GET['noInput']==true){
				?>
						<div class="error-message"><?php echo $_GET['noInput'] ?></div>
				<?php
					}
				?>

				<?php
					if(@$_GET['invalid']==true){
				?>
						<div class="error-message"><?php echo $_GET['invalid'] ?></div>
				<?php
					}
				?>
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<button name="login">Login</button>
			</form>
		</div>

	</body>

</html>
