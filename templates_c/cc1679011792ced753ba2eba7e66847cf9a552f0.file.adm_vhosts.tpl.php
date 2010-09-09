<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 12:52:49
         compiled from "templates/bluefreedom2/adm_vhosts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6260271124c2dc50162a1e7-40893553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1679011792ced753ba2eba7e66847cf9a552f0' => 
    array (
      0 => 'templates/bluefreedom2/adm_vhosts.tpl',
      1 => 1278067956,
    ),
  ),
  'nocache_hash' => '6260271124c2dc50162a1e7-40893553',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>vHosts</h2>
<table width="100%">
	<tr>
		<td>IP</td>
		<td>benutzt</td>
		<td>limit</td>
		<td>vHost</td>
		<td>Aktion</td>
	</tr>
<?php  $_smarty_tpl->tpl_vars['vhost'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('vhosts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['vhost']->key => $_smarty_tpl->tpl_vars['vhost']->value){
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['vhost']->value[0];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['vhost']->value[1];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['vhost']->value[2];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['vhost']->value[3];?>
</td>
		<td><a href="adm_vhosts.php?del=<?php echo $_smarty_tpl->tpl_vars['vhost']->value[0];?>
">l&ouml;schen</a></td>
	</tr>
<?php }} ?>
</table>

<h2>vHost hinzuf&uuml;gen</h2>
<form action="adm_vhosts.php" method="post">
	<table width="100%">
		<tr>
			<td>IP</td>
			<td><input type="text" name="ip" /></td>
		</tr>
		<tr>
			<td>Limit</td>
			<td><input type="text" name="limit" /></td>
		</tr>
		<tr>
			<td>Host</td>
			<td><input type="text" name="host" /></td>
		</tr>
	</table>
	<input type="submit" value="hinzuf&uuml;gen" />
</form>
