<?php
	define('sBNC', true);
	session_start();
	require_once('config.php');
	if (isset($_SESSION['sbnc_isloggedin'], $_SESSION['sbnc_user'], $_SESSION['sbnc_pass']) && $_SESSION['sbnc_isloggedin']) {
		require_once('class/itype.php');
		require_once('class/sbnc.php');
		require_once('function/byte_format.php');
		@$smarty->register_modifier('byte', 'byte_format');

		$sbnc = new SBNC(HOST, PORT, $_SESSION['sbnc_user'], $_SESSION['sbnc_pass']);
		if ($sbnc) {
			if ($sbnc->Call("commands") != 'RPC_INVALIDUSERPASS') {
				if (isset($_POST['ip'])) $sbnc->Call('addtrustedip', array($_POST['ip']));
				if (isset($_GET['del'])) $sbnc->Call('removetrustedip', array($_GET['del']));
				$smarty->assign('trustedips', $sbnc->Call('gettrustedips'));
				$smarty->assign('file', 'adm_trustedips.tpl');
				$smarty->display('site.tpl');
				$sbnc->Destroy();
				exit;
			}
			$sbnc->Destroy();
		}
	}
	header('Location: /login.php', true, 301);
?>
