<?php
	define('sBNC', true);
	session_start();
	require_once('config.php');
	if (isset($_SESSION['sbnc_isloggedin'], $_SESSION['sbnc_user'], $_SESSION['sbnc_pass']) && $_SESSION['sbnc_isloggedin']) {
		require_once('class/itype.php');
		require_once('class/sbnc.php');
		require_once('class/irctohtml.php');

		$sbnc = new SBNC(HOST, PORT, $_SESSION['sbnc_user'], $_SESSION['sbnc_pass']);
		if ($sbnc) {
			if ($sbnc->Call("commands") != 'RPC_INVALIDUSERPASS') {
				$smarty->append('breadcrumb', $lang['menu_settings']);

				if (isset($_POST['realname'])) $sbnc->Call('setvalue', array('realname', $_POST['realname']));
				if (isset($_POST['vhost'])) $sbnc->Call('setvalue', array('vhost', $_POST['vhost']));
				if (isset($_POST['server'])) $sbnc->Call('setvalue', array('server', $_POST['server']));
				if (isset($_POST['port'])) $sbnc->Call('setvalue', array('port', $_POST['port']));
				if (isset($_POST['serverpass'])) $sbnc->Call('setvalue', array('serverpass', $_POST['serverpass']));
				if (isset($_POST['awaynick'])) $sbnc->Call('setvalue', array('awaynick', $_POST['awaynick']));
				if (isset($_POST['away'])) $sbnc->Call('setvalue', array('away', $_POST['away']));
				if (isset($_POST['ssl'])) $sbnc->Call('setvalue', array('ssl', $_POST['ssl']));
				if (isset($_POST['ipv6'])) $sbnc->Call('setvalue', array('ipv6', $_POST['ipv6']));

				$smarty->assign('realname', $sbnc->Call('getvalue', array('realname')));
				$smarty->assign('vhost', $sbnc->Call('getvalue', array('vhost')));
				$vhosts = array();
				foreach ($sbnc->Call('getvhosts') as $vhost) {
					$vhosts[$vhost[0]] = $vhost[3];
				}
				$smarty->assign('vhosts', $vhosts);
				$smarty->assign('server', $sbnc->Call('getvalue', array('server')));
				$smarty->assign('port', $sbnc->Call('getvalue', array('port')));
				$smarty->assign('serverpass', $sbnc->Call('getvalue', array('serverpass')));
				$smarty->assign('awaynick', $sbnc->Call('getvalue', array('awaynick')));
				$smarty->assign('away', $sbnc->Call('getvalue', array('away')));
				$smarty->assign('ssl', $sbnc->Call('getvalue', array('ssl')));
				$smarty->assign('ipv6', $sbnc->Call('getvalue', array('ipv6')));
				$smarty->assign('values', array(0 => 'Off', 1 => 'On'));

				$smarty->assign('file', 'settings.tpl');
				$smarty->display('site.tpl');
				$sbnc->Destroy();
				exit;
			}
			$sbnc->Destroy();
		} 
	}
	header('Location: /login.php', true, 301);
?>
