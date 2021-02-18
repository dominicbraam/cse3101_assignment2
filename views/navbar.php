<html>
	<link rel="stylesheet" href="css/style.css">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li class="btn-login"><a href="search.php">Search</a></li>
		<?php
			if(isset($_SESSION['user'])){
		?>

		<li><?php echo $_SESSION['user'] ?></li>
		<li class="btn-login"><a href="../controllers/logout.php">Logout</a></li>

		<?php
			} else {
		?>

		<li class="btn-login"><a href="login.php">Login</a></li>

		<?php
			}
		?>
	</ul>
</html>
