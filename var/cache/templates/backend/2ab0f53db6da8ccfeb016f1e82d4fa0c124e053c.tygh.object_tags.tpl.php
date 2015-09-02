<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 17:33:41
         compiled from "/var/www/html/market/design/backend/templates/addons/tags/views/tags/components/object_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172223621055dc7cc5df5990-24207444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab0f53db6da8ccfeb016f1e82d4fa0c124e053c' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/addons/tags/views/tags/components/object_tags.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '172223621055dc7cc5df5990-24207444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_save' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'input_name' => 0,
    'object' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc7cc5e08b66_03645720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc7cc5e08b66_03645720')) {function content_55dc7cc5e08b66_03645720($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/market/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('tags'));
?>
<div id="content_tags">

<?php echo smarty_function_script(array('src'=>"js/addons/tags/tags_autocomplete.js"),$_smarty_tpl);?>


    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
        <label class="control-label"><?php echo $_smarty_tpl->__("tags");?>
:</label>
        <div class="controls">
            <ul id="my_tags">
                <input type="hidden" id="object_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" id="object_type" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" value="" />
                <input type="hidden" id="object_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" />
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php }} ?>
