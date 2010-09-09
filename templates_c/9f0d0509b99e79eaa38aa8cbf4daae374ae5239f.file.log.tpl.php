<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 12:52:45
         compiled from "templates/bluefreedom2/log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2435815494c2dc4fd9c9e58-74896549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0d0509b99e79eaa38aa8cbf4daae374ae5239f' => 
    array (
      0 => 'templates/bluefreedom2/log.tpl',
      1 => 1278067956,
    ),
  ),
  'nocache_hash' => '2435815494c2dc4fd9c9e58-74896549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2><?php echo $_smarty_tpl->getVariable('menu_log')->value;?>
</h2>

<?php if ($_smarty_tpl->getVariable('deleted')->value){?>
	<?php echo $_smarty_tpl->getVariable('log_erased')->value;?>

<?php }else{ ?>
	<form action="/log.php" method="post">
		<input name="erase" type="submit" value="<?php echo $_smarty_tpl->getVariable('log_promt')->value;?>
">
	</form>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('log')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
?>
	<p><?php echo $_smarty_tpl->tpl_vars['line']->value;?>
</p>
<?php }} ?>