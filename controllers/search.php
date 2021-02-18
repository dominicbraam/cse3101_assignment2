<?php

session_start();

if(isset($_POST['search'])){
	if(empty($_POST['query'])){
		header("location:../views/index.php");
	} else {
		header("location:../views/index.php?query=" . $_POST['query']);
	}
}
