<?php /* Smarty version Smarty-3.1.21, created on 2015-09-02 01:01:50
         compiled from "/var/www/html/market/design/backend/templates/views/upgrade_center/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61363416455e6204ed02710-95394080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87351862c28fbd217749b4c2cbe3c461a6d6681' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/upgrade_center/manage.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '61363416455e6204ed02710-95394080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'upgrade_packages' => 0,
    'packages' => 0,
    '_id' => 0,
    'type' => 0,
    'id' => 0,
    'package' => 0,
    'installed_upgrades' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e6204edb88e9_99321176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6204edb88e9_99321176')) {function content_55e6204edb88e9_99321176($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/market/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/html/market/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/market/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_formatfilesize')) include '/var/www/html/market/app/functions/smarty_plugins/modifier.formatfilesize.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/market/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/market/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('new_version','release_date','filesize','install','package_contents','download','loading','refresh_packages_list','settings','installed_upgrades','upload_upgrade_package','upload_upgrade_package','upgrade_center'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <div class="upgrade-center">
        <?php  $_smarty_tpl->tpl_vars['packages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['packages']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['upgrade_packages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['packages']->key => $_smarty_tpl->tpl_vars['packages']->value) {
$_smarty_tpl->tpl_vars['packages']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['packages']->key;
?>
            <?php  $_smarty_tpl->tpl_vars['package'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['packages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['package']->key => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['package']->key;
?>
                <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['_id']->value,".","_"), null, 0);?>

                <form name="upgrade_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" action="<?php echo htmlspecialchars(fn_url(), ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit cm-disable-check-changes">
                    <input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="result_ids" value="install_notices_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
,install_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <div class="upgrade-center_item">
                        <div class="upgrade-center_icon">
                            <?php if ($_smarty_tpl->tpl_vars['type']->value=="core"||$_smarty_tpl->tpl_vars['type']->value=="hotfix") {?>
                                <i class="glyph-physics1"></i>
                            <?php } else { ?>
                                <i class="glyph-addon"></i>
                            <?php }?>
                        </div>

                        <div class="upgrade-center_content">
                            <h4 class="upgrade-center_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                            <ul class="upgrade-center_info">
                                <li> <strong><?php echo $_smarty_tpl->__("new_version");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['to_version'], ENT_QUOTES, 'UTF-8');?>
</li>
                                <li> <strong><?php echo $_smarty_tpl->__("release_date");?>
:</strong> <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['package']->value['timestamp']), ENT_QUOTES, 'UTF-8');?>
</li>
                                <li> <strong><?php echo $_smarty_tpl->__("filesize");?>
:</strong> <?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['package']->value['size']);?>
</li>
                            </ul>
                            <p class="upgrade-center_desc">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['package']->value['description'],"\n","<br>");?>

                            </p>

                            <?php if ($_smarty_tpl->tpl_vars['package']->value['ready_to_install']) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/upgrade_center/components/install_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'caption'=>__("install")), 0);?>


                                <a class="upgrade-center_pkg cm-dialog-opener cm-ajax" href="<?php echo htmlspecialchars(fn_url("upgrade_center.package_content?package_id=".((string)$_smarty_tpl->tpl_vars['_id']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="package_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['package']->value['name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("package_contents");?>
</a>

                            <?php } else { ?>
                                <div class="upgrade-center_install">
                                    <input name="dispatch[upgrade_center.download]" type="submit" class="btn cm-loading-btn" value="<?php echo $_smarty_tpl->__("download");?>
" data-ca-loading-text="<?php echo $_smarty_tpl->__("loading");?>
">
                                </div>
                            <?php }?>
                                
                            <?php echo $_smarty_tpl->getSubTemplate ("views/upgrade_center/components/notices.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0);?>

                        </div>
                    </div>
                </form>
            <?php } ?>
        <?php }
if (!$_smarty_tpl->tpl_vars['packages']->_loop) {
?>
            <p class="no-items"><?php echo $_smarty_tpl->__('text_no_upgrades_available');?>
</p>
        <?php } ?>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">

        (function(_, $){
            $('.cm-loading-btn').on('click', function() {
                var self = $(this);
                setTimeout(function() {
                    self.prop('value', self.data('caLoadingText'));
                    $('.cm-loading-btn').attr('disabled', true);
                }, 50);
                return true;
            });
        })(Tygh, Tygh.$);
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("refresh_packages_list"),'href'=>"upgrade_center.refresh"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("settings"),'href'=>"settings.manage&section_id=Upgrade_center"));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php echo Smarty::$_smarty_vars['capture']['install_btn'];?>

    <?php if ($_smarty_tpl->tpl_vars['installed_upgrades']->value['has_upgrades']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"upgrade_center.installed_upgrades",'but_text'=>__("installed_upgrades"),'but_role'=>"link"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("upload_upgrade_package", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/upgrade_center/components/upload_upgrade_package.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"upgrade_center:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"upgrade_center:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"upload_upgrade_package_container",'text'=>__("upload_upgrade_package"),'title'=>__("upload_upgrade_package"),'content'=>Smarty::$_smarty_vars['capture']['upload_upgrade_package'],'act'=>"general",'link_class'=>"cm-dialog-auto-size",'icon'=>"icon-plus",'link_text'=>''), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"upgrade_center:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("upgrade_center"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
