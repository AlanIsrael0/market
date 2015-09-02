<?php /* Smarty version Smarty-3.1.21, created on 2015-09-02 01:05:37
         compiled from "/var/www/html/market/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136800225755e6213196b722-92288651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '096e23b35b00852318e26b9b131ead2249be1ae3' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/common/sidebox.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '136800225755e6213196b722-92288651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e62131996363_39338167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e62131996363_39338167')) {function content_55e62131996363_39338167($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
