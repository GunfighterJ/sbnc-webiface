<?php
	define('sBNC', true);
	session_start();
	session_destroy();
	header('Location: /', true, 301);
	exit;
?>
