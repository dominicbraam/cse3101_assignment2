<html>
	<link rel="stylesheet" href="css/style.css">
	<ul>
<li class="btn-login"><a href="createPost.php">Create Post</a></li>
<?php
if(isset($_SESSION['user'])){
?>
		<li><?php echo $_SESSION['user'] ?></li>
		<li class="btn-login"><a href="../controllers/Logout.php">Logout</a></li>

<?php
} else {
?>
		<li class="btn-login"><a href="Login.php">Login</a></li>
<?php
}
?>
		<li><a href="feed.php">Home</a></li>
	</ul>

</html>
