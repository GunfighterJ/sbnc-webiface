<?php /* Smarty version Smarty-3.0-RC2, created on 2010-07-01 13:18:37
         compiled from "templates/test/traffic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5568595664c2c798d6c4e24-14319864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1e4ccea7d33f2366383bd448477f03f65dff8b7' => 
    array (
      0 => 'templates/test/traffic.tpl',
      1 => 1277983090,
    ),
  ),
  'nocache_hash' => '5568595664c2c798d6c4e24-14319864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/virtual/ceno.me/bnc/htdocs/smarty/plugins/function.math.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h1>Traffic</h1>
						
<table>
	<thead>
		<tr>
			<th></th>
			<th>IN</th>
			<th>Out</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Server</th>
			<td><?php echo $_smarty_tpl->getVariable('traffic')->value[0];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('traffic')->value[1];?>
</td>
		</tr>
		<tr>
			<th scope="row">User</th>
			<td><?php echo $_smarty_tpl->getVariable('traffic')->value[2];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('traffic')->value[3];?>
</td>
		</tr>
		<tr>
			<th scope="row">Gesamt</th>
			<td><?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->getVariable('traffic')->value[0],'y'=>$_smarty_tpl->getVariable('traffic')->value[2]),$_smarty_tpl->smarty,$_smarty_tpl);?>
</td>
			<td><?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->getVariable('traffic')->value[1],'y'=>$_smarty_tpl->getVariable('traffic')->value[3]),$_smarty_tpl->smarty,$_smarty_tpl);?>
</td>
		</tr>
	</tbody>
</table>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>