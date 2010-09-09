<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-01 13:26:08
         compiled from "templates/test/log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15391428314c2c7b50186c29-92083195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8f552ee70dfe231a373a1557e641457656327bc' => 
    array (
      0 => 'templates/test/log.tpl',
      1 => 1277983564,
    ),
  ),
  'nocache_hash' => '15391428314c2c7b50186c29-92083195',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('deleted')->value){?>
	Log gel&ouml;scht
<?php }else{ ?>
	<form action="/log.php" method="post">
		<input name="erase" type="submit" value="Log l&ouml;schen">
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

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>