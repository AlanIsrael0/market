<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 17:33:11
         compiled from "/var/www/html/market/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200120632755dc7ca79c1952-84970577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b85795aa006408c8bcbf52cb2e8275efdbec598' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/common/previewer.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '200120632755dc7ca79c1952-84970577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc7ca79c4f85_65632726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc7ca79c4f85_65632726')) {function content_55dc7ca79c4f85_65632726($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/market/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
