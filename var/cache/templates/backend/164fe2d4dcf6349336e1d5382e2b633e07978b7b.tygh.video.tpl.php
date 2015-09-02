<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 00:25:47
         compiled from "/var/www/html/market/design/backend/templates/addons/help_tutorial/components/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111639872855db8bdb21dd69-64465924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '164fe2d4dcf6349336e1d5382e2b633e07978b7b' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/addons/help_tutorial/components/video.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '111639872855db8bdb21dd69-64465924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'item' => 0,
    'item2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55db8bdb228734_82792347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db8bdb228734_82792347')) {function content_55db8bdb228734_82792347($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/market/app/functions/smarty_plugins/block.inline_script.php';
?><div class="help-tutorial-wrapper"><div class="help-tutorial-content clearfix <?php if ($_smarty_tpl->tpl_vars['count']->value==2) {?>help-tutorial-content_width_big<?php }?>" id="help_tutorial_content"><?php if ($_smarty_tpl->tpl_vars['count']->value==2) {?><iframe width="460" height="360" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&rel=0&html5=1" frameborder="0" allowfullscreen align="left"></iframe><iframe width="460" height="360" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value, ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&rel=0&html5=1" frameborder="0" allowfullscreen align="right"></iframe><?php } else { ?><iframe width="640" height="360" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&rel=0&html5=1" frameborder="0" allowfullscreen></iframe><?php }?></div></div><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">(function(_, $) {$(function() {$('#help_tutorial_link').on('click', function() {var self = $(this);self.toggleClass('open');$('#help_tutorial_content').toggleClass('open');});if($('#elm_sidebar').length == 0) {$('#help_tutorial_link').css('margin-left', 0);}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
