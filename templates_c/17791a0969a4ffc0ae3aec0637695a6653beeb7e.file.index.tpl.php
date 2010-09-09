<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-02 12:52:51
         compiled from "templates/bluefreedom2/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:662342754c2dc503b071a4-95676152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17791a0969a4ffc0ae3aec0637695a6653beeb7e' => 
    array (
      0 => 'templates/bluefreedom2/index.tpl',
      1 => 1278067956,
    ),
  ),
  'nocache_hash' => '662342754c2dc503b071a4-95676152',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/var/www/virtual/ceno.me/bnc/htdocs/smarty/plugins/modifier.replace.php';
?><h2><?php echo smarty_modifier_replace($_smarty_tpl->getVariable('index_welcome')->value,'{nickname}',$_smarty_tpl->getVariable('nick')->value);?>
</h2>
<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('index_nick')->value,'{nickname}',$_smarty_tpl->getVariable('nick')->value);?>

<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('index_server')->value,'{server}',$_smarty_tpl->getVariable('server')->value);?>

<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('index_uptime')->value,'{uptime}',$_smarty_tpl->getVariable('uptime')->value);?>


<h2><?php echo $_smarty_tpl->getVariable('index_channels')->value;?>
</h2>
<ul>
	<?php  $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channels')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['channel']->key => $_smarty_tpl->tpl_vars['channel']->value){
?>
	<li><?php echo $_smarty_tpl->tpl_vars['channel']->value;?>
</li>
	<?php }} ?>
</ul>