<?php /* Smarty version Smarty-3.1.21, created on 2015-09-02 01:01:52
         compiled from "/var/www/html/market/design/backend/templates/views/templates/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52562756855e62050a25819-56620313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b65b8b6cac0b59cd33c2cfab30358c54c640ee9a' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/templates/manage.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '52562756855e62050a25819-56620313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_path' => 0,
    'rel_path' => 0,
    'images_dir' => 0,
    'config' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e62050aa1083_90850588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e62050aa1083_90850588')) {function content_55e62050aa1083_90850588($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/market/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/market/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/market/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('text_restore_question','open_file_or_create_new','new_file','create_file','could_not_open_file','upload_file','upload','new_folder','name','new_file','name','on_site_template_editing','restore_from_repository','download','rename','delete','create_file','create_folder','upload_file','create','templates'));
?>
<?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/templates.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        _.tr({
            text_restore_question : '<?php echo strtr($_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_enter_filename : '<?php echo $_smarty_tpl->__(strtr("text_enter_filename", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )));?>
',
            text_are_you_sure_to_delete_file : '<?php echo $_smarty_tpl->__(strtr("text_are_you_sure_to_delete_file", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )));?>
'
        });

        <?php if ($_smarty_tpl->tpl_vars['selected_path']->value) {?>
        _.templates.selected_path = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_path']->value, ENT_QUOTES, 'UTF-8');?>
';
        <?php }?>
        _.templates.rel_path = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rel_path']->value, ENT_QUOTES, 'UTF-8');?>
';
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div id="error_box" class="hidden">
    <div align="center" class="notification-e">
        <div id="error_status"></div>
    </div>
</div>

<div id="status_box" class="hidden">
    <div class="notification-n" align="center">
        <div id="status"></div>
    </div>
</div>

<!--Editor-->
<div class="te-content cm-te-content">
    <div id="template_text"></div>
    <div id="template_image" class="te-template-image"></div>
</div>

<div class="cm-te-messages">
    <div class="te-empty-folder empty-text">
        <h2><?php echo $_smarty_tpl->__("open_file_or_create_new");?>
</h2>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_file",'text'=>__("new_file"),'content'=>'','link_text'=>__("create_file"),'act'=>"general",'link_class'=>"cm-dialog-auto-size btn-primary",'icon'=>"icon-plus icon-white"), 0);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"templates:directory_action")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"templates:directory_action"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"templates:directory_action"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="te-unknown-file empty-text">
        <h2><?php echo $_smarty_tpl->__("could_not_open_file");?>
</h2>
    </div>
</div>

<div class="hidden" id="content_upload_file" title="<?php echo $_smarty_tpl->__("upload_file");?>
">
    
    <div class="install-addon">
        <form name="upload_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="path" id="upload_path" />
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />

                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"uploaded_data[0]"), 0);?>

            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[templates.upload_file]",'but_meta'=>"cm-te-upload-file",'cancel_action'=>"close",'but_text'=>__("upload")), 0);?>


            </div>
        </form>
    </div>
</div>

<div class="hidden" id="content_add_new_folder" title="<?php echo $_smarty_tpl->__("new_folder");?>
">
    <form name="add_folder_form" class="form-horizontal form-edit">
    <div class="control-group">
        <label for="elm_new_folder" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
        <div class="controls">
            <input type="text" class="span4" name="new_folder" id="elm_new_folder" value="" />
        </div>
    </div>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'but_meta'=>"cm-te-create-folder cm-dialog-closer"), 0);?>

    </div>
    </form>
</div>

<div class="hidden" id="content_add_new_file" title="<?php echo $_smarty_tpl->__("new_file");?>
">
    <form name="add_file_form" class="form-horizontal form-edit">
    <div class="control-group">
        <label for="elm_new_file" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" class="span4" name="new_file" id="elm_new_file" value="" />
        </div>
    </div>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'but_meta'=>"cm-dialog-closer cm-te-create-file"), 0);?>

    </div>
    </form>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"templates:on_site_template_editing")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"templates:on_site_template_editing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="cm-te-onsite-editing"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("on_site_template_editing"),'href'=>fn_url("customization.update_mode?type=design&status=enable&return_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)),'target'=>"_blank",'class'=>"cm-post"));?>
</li>
        <li class="divider"></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"templates:on_site_template_editing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"templates:restore_from_repository")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"templates:restore_from_repository"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="cm-te-restore"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("restore_from_repository")));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"templates:restore_from_repository"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <li class="cm-te-getfile"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("download")));?>
</li>
        <li class="cm-te-rename"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("rename")));?>
</li>
        <li class="cm-te-delete"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete")));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"ce-te-actions"));?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"templates:save_file")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"templates:save_file"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-te-save-file btn-primary disabled",'but_role'=>"submit"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"templates:save_file"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"templates:tree")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"templates:tree"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-row">
        <!--file tree-->
        <div id="filelist" class="cm-te-file-tree nested-list nested-list-folders"></div>
        <!--#file tree-->
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"templates:tree"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"templates:tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"templates:tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="cm-te-create-file"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_file",'content'=>'','link_text'=>__("create_file"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0);?>
</li>
        <li class="cm-te-create-folder"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_folder",'content'=>'','link_text'=>__("create_folder"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0);?>
</li>
        <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"upload_file",'content'=>'','link_text'=>__("upload_file"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0);?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"templates:tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"main",'tool_meta'=>"cm-te-create",'hide_actions'=>true,'tools_list'=>Smarty::$_smarty_vars['capture']['tools_list'],'display'=>"inline",'title'=>__("create"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->__("templates");?>
<span class="muted f-small cm-te-path te-path"></span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left"), 0);?>

<?php }} ?>
