<?php /* Smarty version Smarty-3.1.21, created on 2015-09-02 00:58:51
         compiled from "/var/www/html/market/design/backend/templates/addons/discussion/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69075117755e61f9b89c483-21333378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442b09ff0bef453b29b2dbb4528374301bfaa270' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/addons/discussion/hooks/products/tabs_extra.post.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '69075117755e61f9b89c483-21333378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e61f9b8a37e7_20520187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e61f9b8a37e7_20520187')) {function content_55e61f9b8a37e7_20520187($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
