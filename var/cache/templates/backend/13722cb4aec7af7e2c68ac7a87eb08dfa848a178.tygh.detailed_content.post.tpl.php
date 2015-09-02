<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 17:33:41
         compiled from "/var/www/html/market/design/backend/templates/addons/blog/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139660480555dc7cc5dce2b4-45864226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13722cb4aec7af7e2c68ac7a87eb08dfa848a178' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/addons/blog/hooks/pages/detailed_content.post.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '139660480555dc7cc5dce2b4-45864226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc7cc5ddc669_92196486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc7cc5ddc669_92196486')) {function content_55dc7cc5ddc669_92196486($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('blog','image'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_BLOG')) {?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("blog"),'target'=>"#blog_image"), 0);?>

<div id="blog_image" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
:</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"blog_image",'image_object_type'=>"blog",'image_pair'=>$_smarty_tpl->tpl_vars['page_data']->value['main_pair'],'no_detailed'=>true,'hide_titles'=>true), 0);?>

            </div>
        </div>
    </fieldset>
</div>

<?php }?>
<?php }} ?>
