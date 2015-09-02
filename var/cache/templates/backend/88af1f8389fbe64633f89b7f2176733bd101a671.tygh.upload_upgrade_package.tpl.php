<?php /* Smarty version Smarty-3.1.21, created on 2015-09-02 01:01:50
         compiled from "/var/www/html/market/design/backend/templates/views/upgrade_center/components/upload_upgrade_package.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21933914255e6204edc4530-75927370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88af1f8389fbe64633f89b7f2176733bd101a671' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/upgrade_center/components/upload_upgrade_package.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21933914255e6204edc4530-75927370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e6204ede7d19_44315962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6204ede7d19_44315962')) {function content_55e6204ede7d19_44315962($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('install_theme_text','upload'));
?>
<div id="upload_upgrade_package_container" class="install-addon">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="upgrade_package_upload_form" class="form-horizontal" enctype="multipart/form-data">
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />
            
            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_theme_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"upgrade_pack[0]"), 0);?>

        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[upgrade_center.upload]",'cancel_action'=>"close",'but_text'=>__("upload")), 0);?>

        </div>
    </form>
<!--upload_upgrade_package_container--></div>
<?php }} ?>
