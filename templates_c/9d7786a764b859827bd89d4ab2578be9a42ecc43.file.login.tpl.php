<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-01 12:32:21
         compiled from "templates/test/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2657821714c2c6eb574a632-05647072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7786a764b859827bd89d4ab2578be9a42ecc43' => 
    array (
      0 => 'templates/test/login.tpl',
      1 => 1277980139,
    ),
  ),
  'nocache_hash' => '2657821714c2c6eb574a632-05647072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<form name="login" action="<?php echo $_smarty_tpl->getVariable('path')->value;?>
login.php" method="post">
	<fieldset>
		<legend>Login to shroudBNC</legend>
		<label for="sbnc_user">Ident</label>
		<input type="text" name="sbnc_user" maxlength="10" /><br />

		<label for="sbnc_pass">Password</label>
		<input type="password" name="sbnc_pass" /><br />

		<input type="submit">
	</fieldset>
</form>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>