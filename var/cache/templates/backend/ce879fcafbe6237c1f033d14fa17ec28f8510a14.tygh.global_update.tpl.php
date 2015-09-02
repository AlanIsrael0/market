<?php /* Smarty version Smarty-3.1.21, created on 2015-09-02 01:04:40
         compiled from "/var/www/html/market/design/backend/templates/views/products/global_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99663523555e620f88f6c67-36586493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce879fcafbe6237c1f033d14fa17ec28f8510a14' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/products/global_update.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99663523555e620f88f6c67-36586493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'primary_currency' => 0,
    'currencies' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e620f893fc40_84588587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e620f893fc40_84588587')) {function content_55e620f893fc40_84588587($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/market/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('global_update_description','price','list_price','in_stock','products','text_all_products_included','apply','global_update'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="global_update_form" class="form-horizontal form-edit  "/>

<p><?php echo $_smarty_tpl->__("global_update_description");?>
</p>

<div class="control-group">
    <label class="control-label" for="gu_price"><?php echo $_smarty_tpl->__("price");?>
</label>
    <div class="controls">
    <input type="text" id="gu_price" name="update_data[price]" size="6" value="" />
    <select class="input-mini" name="update_data[price_type]">
        <option value="A" ><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
        <option value="P" >%</option>
    </select>
    </div>
</div>

<?php if (!($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))) {?>
    <div class="control-group">
        <label for="gu_list_price" class="control-label"><?php echo $_smarty_tpl->__("list_price");?>
</label>
        <div class="controls">
        <input type="text" id="gu_list_price" name="update_data[list_price]" size="6" value="" />
        <select class="input-mini" name="update_data[list_price_type]">
            <option value="A" ><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
            <option value="P" >%</option>
        </select>
        </div>
    </div>

    <div class="control-group">
        <label for="gu_in_stock" class="control-label"><?php echo $_smarty_tpl->__("in_stock");?>
</label>
        <div class="controls">
        <input type="text" id="gu_in_stock" name="update_data[amount]" size="6" value="" /></div>
    </div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:global_update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:global_update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:global_update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("products")), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"links",'input_name'=>"update_data[product_ids]",'no_item_text'=>__("text_all_products_included")), 0);?>

</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_target_form'=>"global_update_form",'but_text'=>__("apply"),'but_role'=>"submit-link",'but_name'=>"dispatch[products.global_update]"), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("global_update"),'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content'=>Smarty::$_smarty_vars['capture']['mainbox']), 0);?>
<?php }} ?>