<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 12:52:43
         compiled from "templates/bluefreedom2/adm_trustedips.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10763400774c2dc4fb769be4-59166169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9574d11942d5912c4d9f235e6d2953a85af127bb' => 
    array (
      0 => 'templates/bluefreedom2/adm_trustedips.tpl',
      1 => 1278067957,
    ),
  ),
  'nocache_hash' => '10763400774c2dc4fb769be4-59166169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Trusted IPs</h2>

<table width="100%">
	<tr>
		<td>IP</td>
		<td>Aktion</td>
	</tr>
<?php  $_smarty_tpl->tpl_vars['ip'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('trustedips')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ip']->key => $_smarty_tpl->tpl_vars['ip']->value){
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</td>
		<td><a href="adm_trustips.php?del=<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">l&ouml;schen</a></td>
	</tr>
<?php }} ?>
</table>

<h2>IP hinzuf&uuml;gen</h2>
<form action="adm_trustips.php" method="post">
	<table width="100%">
		<tr>
			<td>IP</td>
			<td><input type="text" name="ip" /></td>
		</tr>
	</table>
	<input type="submit" value="hinzuf&uuml;gen" />
</form>
