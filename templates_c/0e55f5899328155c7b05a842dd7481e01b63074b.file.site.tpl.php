<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 12:52:39
         compiled from "templates/bluefreedom2/site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19080051544c2dc4f71d31e8-76498750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e55f5899328155c7b05a842dd7481e01b63074b' => 
    array (
      0 => 'templates/bluefreedom2/site.tpl',
      1 => 1278067957,
    ),
  ),
  'nocache_hash' => '19080051544c2dc4f71d31e8-76498750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/virtual/ceno.me/bnc/htdocs/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>sBNC Webinterface<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breadcrumb')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?> &raquo; <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }} ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="templates/bluefreedom2/style.css" media="screen" />
	</head>
	<body>
		<div id="wrap">
			<div id="top"></div>
			<div id="content">
				<div class="header"></div>
<?php if ($_SESSION['sbnc_isloggedin']){?>
				<div class="left">
					<h2>Navigation</h2>
					<ul>
						<li><a href="/"><?php echo $_smarty_tpl->getVariable('menu_index')->value;?>
</a></li>
						<li><a href="log.php"><?php echo $_smarty_tpl->getVariable('menu_log')->value;?>
</a></li>
						<li><a href="settings.php"><?php echo $_smarty_tpl->getVariable('menu_settings')->value;?>
</a></li>
						<li><a href="traffic.php"><?php echo $_smarty_tpl->getVariable('menu_traffic')->value;?>
</a></li>
						<li><a href="logout.php"><?php echo $_smarty_tpl->getVariable('menu_logout')->value;?>
</a></li>
					</ul>
<?php if ($_SESSION['sbnc_isadmin']){?>
					<h2>Admin</h2>
					<ul>
						<li><a href="adm_trustips.php">Trusted IPs</a></li>
						<li><a href="adm_log.php">Log</a></li>
						<li><a href="adm_users.php">Users</a></li>
						<li><a href="adm_vhosts.php">vHosts</a></li>
					</ul>
<?php }?>
				</div>
<?php }?>
				<div class="middle">
					<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('file')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
				</div>
				<div id="clear"></div>
			</div>
			<div id="bottom"></div>
		</div>
		<div id="footer">
			Code &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <a href="http://tamcore.eu">Philipp 'TamCore' B.</a> | Design by <a href="http://www.minimalistic-design.net">Minimalistic Design</a>
		</div>
	</body>
</html>
