<?php
	define('sBNC', true);

	session_start();

	require_once('config.php');
	if (isset($_SESSION['sbnc_isloggedin'], $_SESSION['sbnc_user'], $_SESSION['sbnc_pass']) && $_SESSION['sbnc_isloggedin']) {
		require_once('class/itype.php');
		require_once('class/sbnc.php');
		require_once('class/irctohtml.php');
		require_once('function/duration.php');

		$sbnc = new SBNC(HOST, PORT, $_SESSION['sbnc_user'], $_SESSION['sbnc_pass']);
		if ($sbnc) {
			if ($sbnc->Call("commands") != 'RPC_INVALIDUSERPASS') {
				$smarty->append('breadcrumb', $lang['menu_index']);
				$smarty->assign('traffic', $sbnc->Call('gettraffic'));
				$smarty->assign('nick', $sbnc->Call('getvalue', array('nick')));
				$smarty->assign('server', $sbnc->Call('getvalue', array('server')));
				$smarty->assign('port', $sbnc->Call('getvalue', array('port')));
				$smarty->assign('ssl', $sbnc->Call('getvalue', array('ssl')));
				$smarty->assign('ipv6', $sbnc->Call('getvalue', array('ipv6')));
				$smarty->assign('uptime', duration($sbnc->Call('getvalue', array('uptime'))));
				$smarty->assign('channels', $sbnc->Call('getchannels'));

				$smarty->assign('file', 'index.tpl');
				$smarty->display('site.tpl');
				$sbnc->Destroy();
				exit;
			}
			$sbnc->Destroy();
		} 
	} else
		header('Location: /login.php', true, 301);
?>
