<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 12:52:39
         compiled from "templates/bluefreedom2/traffic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3847533784c2dc4f735e620-57199257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7216a88b6b4b4ce52e7901d01a670ef9b72f5d' => 
    array (
      0 => 'templates/bluefreedom2/traffic.tpl',
      1 => 1278067956,
    ),
  ),
  'nocache_hash' => '3847533784c2dc4f735e620-57199257',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/virtual/ceno.me/bnc/htdocs/smarty/plugins/function.math.php';
?><h2><?php echo $_smarty_tpl->getVariable('menu_traffic')->value;?>
</h2>
						
<table width="50%">
	<tr>
		<th></th>
		<th>IN</th>
		<th>Out</th>
	</tr>
	<tr>
		<th scope="row">Server</th>
		<td><?php echo byte_format($_smarty_tpl->getVariable('traffic')->value[0]);?>
</td>
		<td><?php echo byte_format($_smarty_tpl->getVariable('traffic')->value[1]);?>
</td>
	</tr>
	<tr>
		<th scope="row">User</th>
		<td><?php echo byte_format($_smarty_tpl->getVariable('traffic')->value[2]);?>
</td>
		<td><?php echo byte_format($_smarty_tpl->getVariable('traffic')->value[3]);?>
</td>
	</tr>
	<tr>
		<th scope="row">Total</th>
		<td><?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->getVariable('traffic')->value[0],'y'=>$_smarty_tpl->getVariable('traffic')->value[2]),$_smarty_tpl->smarty,$_smarty_tpl);?>
</td>
		<td><?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->getVariable('traffic')->value[1],'y'=>$_smarty_tpl->getVariable('traffic')->value[3]),$_smarty_tpl->smarty,$_smarty_tpl);?>
</td>
	</tr>
</table>
