<?php
	if (!defined('sBNC')) die('Direct access to this location is not allowed');

	error_reporting(E_ALL);

	define('HOST', 'localhost');
	define('PORT', 8888);
	define('TPL', 'bluefreedom2');

	// Don't change anything bellow this line!

	require_once('smarty/Smarty.class.php');
	$smarty = new Smarty();
	$smarty->template_dir = 'templates/'.TPL;

	require('lang/de.php');
?>
