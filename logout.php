<?php 
	unset($_SESSION["fb_access_token"]);
	session_destroy();
	header("location:login.php");
?>