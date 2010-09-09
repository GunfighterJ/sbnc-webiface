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
				$traffic = $sbnc->Call("gettraffic");
				$smarty->append('breadcrumb', $lang['menu_traffic']);
				$smarty->assign('traffic', $traffic);
				$smarty->assign('file', 'traffic.tpl');
				$smarty->display('site.tpl');
				$sbnc->Destroy();
				exit;
			}
			$sbnc->Destroy();
		} 
	}
	header('Location: /login.php', true, 301);
?>
