<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-01 14:00:09
         compiled from "templates/test/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17009782894c2c834910aa82-75006383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950fc1b051a42505e13a055f6c01ae805e9f4711' => 
    array (
      0 => 'templates/test/settings.tpl',
      1 => 1277985606,
    ),
  ),
  'nocache_hash' => '17009782894c2c834910aa82-75006383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/var/www/virtual/ceno.me/bnc/htdocs/smarty/plugins/function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h1>Settings</h1>
	
<form action="/settings.php" method="post">
	<fieldset>
		<legend>General</legend>

		<label for="realname">Realname</label>
		<input type="text" name="realname" value="<?php echo $_smarty_tpl->getVariable('realname')->value;?>
" />

		<label for="vhost">Vhost</label>
		<input type="text" name="vhost" value="<?php echo $_smarty_tpl->getVariable('vhost')->value;?>
" />
	</fieldset>
	<fieldset>
		<legend>Server</legend>

		<label for="server">Server</label>
		<input type="text" name="server" value="<?php echo $_smarty_tpl->getVariable('server')->value;?>
" />

		<label for="port">Port</label>
		<input type="text" name="port" value="<?php echo $_smarty_tpl->getVariable('port')->value;?>
" />

		<label for="ssl">SSL</label>
		<?php echo smarty_function_html_options(array('name'=>'ssl','options'=>$_smarty_tpl->getVariable('values')->value,'selected'=>$_smarty_tpl->getVariable('ssl')->value),$_smarty_tpl->smarty,$_smarty_tpl);?>


		<label for="ipv6">IPv6</label>
		<?php echo smarty_function_html_options(array('name'=>'ipv6','options'=>$_smarty_tpl->getVariable('values')->value,'selected'=>$_smarty_tpl->getVariable('ipv6')->value),$_smarty_tpl->smarty,$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend>Away</legend>

		<label for="awaynick">Awaynick</label>
		<input type="text" name="awaynick" value="<?php echo $_smarty_tpl->getVariable('awaynick')->value;?>
" />

		<label for="away">Away</label>
		<input type="text" name="away" value="<?php echo $_smarty_tpl->getVariable('away')->value;?>
" />
	</fieldset>
	<input type="submit" name="submit" value="Update" />
</form>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>