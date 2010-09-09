<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-01 14:00:09
         compiled from "templates/test/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12081863044c2c8349307056-54010517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c27426cc616e0f20d39851216b59ae90bda69c' => 
    array (
      0 => 'templates/test/header.tpl',
      1 => 1277985606,
    ),
  ),
  'nocache_hash' => '12081863044c2c8349307056-54010517',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
	<head>
		<title>sBNC Webinterface<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breadcrumb')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?> &raquo; <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }} ?></title>
	</head>
	<body>
