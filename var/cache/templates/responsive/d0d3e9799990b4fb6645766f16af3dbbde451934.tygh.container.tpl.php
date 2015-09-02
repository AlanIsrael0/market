<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 17:03:09
         compiled from "/var/www/html/market/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17321039155dc759dbe5b49-73098350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d3e9799990b4fb6645766f16af3dbbde451934' => 
    array (
      0 => '/var/www/html/market/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1440451535,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17321039155dc759dbe5b49-73098350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc759dbecb04_43261587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc759dbecb04_43261587')) {function content_55dc759dbecb04_43261587($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
