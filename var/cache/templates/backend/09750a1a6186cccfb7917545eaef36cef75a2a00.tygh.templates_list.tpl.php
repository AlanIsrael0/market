<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 18:02:55
         compiled from "/var/www/html/market/design/backend/templates/views/debugger/components/templates_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68073876355dc839f685fd4-09145142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09750a1a6186cccfb7917545eaef36cef75a2a00' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/debugger/components/templates_list.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '68073876355dc839f685fd4-09145142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc839f68e095_57222269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc839f68e095_57222269')) {function content_55dc839f68e095_57222269($_smarty_tpl) {?><ul>
	<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
		<li>
			<a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['childs']) {?>
				<?php echo $_smarty_tpl->getSubTemplate ("views/debugger/components/templates_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list'=>$_smarty_tpl->tpl_vars['item']->value['childs']), 0);?>

			<?php }?>
		</li>
	<?php } ?>
</ul>
<?php }} ?>
