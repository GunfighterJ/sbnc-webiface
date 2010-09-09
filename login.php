<?php
	define('sBNC', true);
	session_start();
	require_once('config.php');
	require_once('class/itype.php');
	require_once('class/sbnc.php');

	$smarty->append('breadcrumb', $lang['menu_login']);
	if (isset($_POST['sbnc_user'], $_POST['sbnc_pass']) && !empty($_POST['sbnc_user']) && !empty($_POST['sbnc_pass'])) {
		$sbnc = new SBNC(HOST, PORT, $_POST['sbnc_user'], $_POST['sbnc_pass']);
		if ($sbnc) {
			$result = @$sbnc->Call('commands');
			if($result != 'RPC_INVALIDUSERPASS') {
				$_SESSION['sbnc_user'] = $_POST['sbnc_user'];
				$_SESSION['sbnc_pass'] = $_POST['sbnc_pass'];
				$_SESSION['sbnc_isloggedin'] = true;
				if ($sbnc->Call("getvalue", array('admin'))) $_SESSION['sbnc_isadmin'] = true;
			}
			header('Location: /', true, 301);
			$sbnc->Destroy();
			exit;
		}
	} else {
		$smarty->assign('file', 'login.tpl');
		$smarty->display('site.tpl');
	}
?>
