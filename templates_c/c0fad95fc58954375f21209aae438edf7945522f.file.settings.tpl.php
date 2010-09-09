<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 16:18:21
         compiled from "templates/bluefreedom2/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5360527654c2df52d5a4596-32858681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0fad95fc58954375f21209aae438edf7945522f' => 
    array (
      0 => 'templates/bluefreedom2/settings.tpl',
      1 => 1278067956,
    ),
  ),
  'nocache_hash' => '5360527654c2df52d5a4596-32858681',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/var/www/virtual/ceno.me/bnc/htdocs/smarty/plugins/function.html_options.php';
?><h2><?php echo $_smarty_tpl->getVariable('menu_settings')->value;?>
</h2>
	
<form action="/settings.php" method="post">
	<table>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_realname')->value;?>
</td>
			<td><input type="text" name="realname" value="<?php echo $_smarty_tpl->getVariable('realname')->value;?>
" />
		</tr>

		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_vhost')->value;?>
</td>
			<td><?php echo smarty_function_html_options(array('name'=>'vhost','options'=>$_smarty_tpl->getVariable('vhosts')->value,'selected'=>$_smarty_tpl->getVariable('vhost')->value),$_smarty_tpl->smarty,$_smarty_tpl);?>

		</tr>

		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_server')->value;?>
</td>
			<td><input type="text" name="server" value="<?php echo $_smarty_tpl->getVariable('server')->value;?>
" />
		</tr>

		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_port')->value;?>
</td>
			<td><input type="text" name="port" value="<?php echo $_smarty_tpl->getVariable('port')->value;?>
" />
		</tr>

		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_ssl')->value;?>
</td>
			<td><?php echo smarty_function_html_options(array('name'=>'ssl','options'=>$_smarty_tpl->getVariable('values')->value,'selected'=>$_smarty_tpl->getVariable('ssl')->value),$_smarty_tpl->smarty,$_smarty_tpl);?>

		</tr>

		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_ipv6')->value;?>
</td>
			<td><?php echo smarty_function_html_options(array('name'=>'ipv6','options'=>$_smarty_tpl->getVariable('values')->value,'selected'=>$_smarty_tpl->getVariable('ipv6')->value),$_smarty_tpl->smarty,$_smarty_tpl);?>

		</tr>

		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_awaynick')->value;?>
</td>
			<td><input type="text" name="awaynick" value="<?php echo $_smarty_tpl->getVariable('awaynick')->value;?>
" />
		</tr>

		<tr>
			<td><?php echo $_smarty_tpl->getVariable('settings_away')->value;?>
</td>
			<td><input type="text" name="away" value="<?php echo $_smarty_tpl->getVariable('away')->value;?>
" />
		</tr>
	</table>
	<input type="submit" name="submit" value="<?php echo $_smarty_tpl->getVariable('settings_promt')->value;?>
" />
</form>
