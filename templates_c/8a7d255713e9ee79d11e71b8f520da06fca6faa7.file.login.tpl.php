<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 13:11:48
         compiled from "templates/bluefreedom2/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16176938414c2dc9745015d3-29150536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7d255713e9ee79d11e71b8f520da06fca6faa7' => 
    array (
      0 => 'templates/bluefreedom2/login.tpl',
      1 => 1278067957,
    ),
  ),
  'nocache_hash' => '16176938414c2dc9745015d3-29150536',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2><?php echo $_smarty_tpl->getVariable('menu_login')->value;?>
</h2>
<form name="login" action="<?php echo $_smarty_tpl->getVariable('path')->value;?>
login.php" method="post">
	<table width="80%">
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('login_user')->value;?>
</td>
			<td><input type="text" name="sbnc_user" maxlength="10" /></td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('login_pass')->value;?>
</td>
			<td><input type="password" name="sbnc_pass" /></td>
		</tr>
	</table>
	<input type="submit" value="<?php echo $_smarty_tpl->getVariable('login_promt')->value;?>
">
</form>
