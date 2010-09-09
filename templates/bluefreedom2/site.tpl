<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>sBNC Webinterface{foreach from=$breadcrumb item=item} &raquo; {$item}{/foreach}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="templates/bluefreedom2/style.css" media="screen" />
	</head>
	<body>
		<div id="wrap">
			<div id="top"></div>
			<div id="content">
				<div class="header"></div>
{if $smarty.session.sbnc_isloggedin}
				<div class="left">
					<h2>Navigation</h2>
					<ul>
						<li><a href="/">{$menu_index}</a></li>
						<li><a href="log.php">{$menu_log}</a></li>
						<li><a href="settings.php">{$menu_settings}</a></li>
						<li><a href="traffic.php">{$menu_traffic}</a></li>
						<li><a href="logout.php">{$menu_logout}</a></li>
					</ul>
{if $smarty.session.sbnc_isadmin}
					<h2>Admin</h2>
					<ul>
						<li><a href="adm_trustips.php">Trusted IPs</a></li>
						<li><a href="adm_log.php">Log</a></li>
						<li><a href="adm_users.php">Users</a></li>
						<li><a href="adm_vhosts.php">vHosts</a></li>
					</ul>
{/if}
				</div>
{/if}
				<div class="middle">
					{include file=$file}
				</div>
				<div id="clear"></div>
			</div>
			<div id="bottom"></div>
		</div>
		<div id="footer">
			Code &copy; {$smarty.now|date_format:"%Y"} <a href="http://tamcore.eu">Philipp 'TamCore' B.</a> | Design by <a href="http://www.minimalistic-design.net">Minimalistic Design</a>
		</div>
	</body>
</html>
