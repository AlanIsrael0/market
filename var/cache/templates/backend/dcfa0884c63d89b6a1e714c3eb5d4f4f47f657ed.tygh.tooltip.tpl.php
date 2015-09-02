<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 00:26:17
         compiled from "/var/www/html/market/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155950357155db8bf92f07a7-01453915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcfa0884c63d89b6a1e714c3eb5d4f4f47f657ed' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/common/tooltip.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '155950357155db8bf92f07a7-01453915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55db8bf92f5ef2_73488296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db8bf92f5ef2_73488296')) {function content_55db8bf92f5ef2_73488296($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
