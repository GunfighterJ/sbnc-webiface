<?php
	if (!defined('sBNC')) die('Direct access to this location is not allowed');

	$lang = array(
		'menu_logout' => 'Abmelden',
		'menu_login' => 'Login',
		'menu_index' => '&Uuml;bersicht',
		'menu_password' => 'Passwort &auml;ndern',
		'menu_settings' => 'Einstellungen',
		'menu_traffic' => 'Traffic',
		'menu_log' => 'Log',

		'index_welcome' => 'Willkommen, {nickname}!',
		'index_uptime' => 'Du bist seit <strong>{uptime}</strong> im IRC unterwegs.',
		'index_nick' => 'Dein Nickname ist <strong>{nickname}</strong>.',
		'index_server' => 'Du bist zum Server <strong>{server}</strong> verbunden.',
		'index_traffic' => 'Du hast bisher {traffic_in} eingehenden Traffic und {traffic_out} ausgehenden Traffic verursacht.',
		'index_channels' => 'Kan&auml;le',

		'settings_realname' => 'Echter Name',
		'settings_vhost' => 'vHost',
		'settings_server' => 'Server',
		'settings_port' => 'Port',
		'settings_serverpass' => 'Serverpasswort',
		'settings_ssl' => 'SSL',
		'settings_ipv6' => 'IPv6',
		'settings_awaynick' => 'Awaynick',
		'settings_away' => 'Abwesenheitsnachricht',
		'settings_nick' => 'Nickname',
		'settings_password' => 'Passwort',
		'settings_password_changed' => 'Das Passwort wurde ge&auml;ndert.',
		'settings_promt' => 'aktualisieren',

		'log_erased' => 'Log gel&ouml;scht',
		'log_promt' => 'Log l&ouml;schen',

		'login_user' => 'Username',
		'login_pass' => 'Passwort',
		'login_promt' => 'Anmelden'
	);
	$smarty->assign($lang);
?>
