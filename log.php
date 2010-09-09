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
				$smarty->append('breadcrumb', $lang['menu_log']);

				if (isset($_POST['erase'])) {
					$sbnc->Call("eraselog");
					$smarty->assign('deleted', true);
				}

				$log = $sbnc->Call("getlog", array("0", "end"));
				$irc2html = new IRCtoHTML('');

				if (is_array($log)) {
					foreach ($log as $line) {
						$irc2html->IRCtoHTML(utf8_decode($line));
						$line = $irc2html->getHTML();
						$smarty->append('log', $line);
					}
				}

				$smarty->assign('file', 'log.tpl');
				$smarty->display('site.tpl');
				$sbnc->Destroy();
				exit;
			}
			$sbnc->Destroy();
		} 
	}
	header('Location: /login.php', true, 301);
?>
