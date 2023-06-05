<?php
	session_start();
	// unset all session variables
	unset($_SESSION['user']);

	// destroy the session
	session_destroy();

	// redirect to the login page
	$url = isset($_GET['url']) ? $_GET['url'] : 'index.html';
	header("Location: $url");
	exit;
?>