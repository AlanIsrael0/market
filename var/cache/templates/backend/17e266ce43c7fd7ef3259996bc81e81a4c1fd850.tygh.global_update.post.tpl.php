<?php /* Smarty version Smarty-3.1.21, created on 2015-09-02 01:04:40
         compiled from "/var/www/html/market/design/backend/templates/addons/reward_points/hooks/products/global_update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139207998755e620f8960c67-85038325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e266ce43c7fd7ef3259996bc81e81a4c1fd850' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/addons/reward_points/hooks/products/global_update.post.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '139207998755e620f8960c67-85038325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e620f8985fe0_57681204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e620f8985fe0_57681204')) {function content_55e620f8985fe0_57681204($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('price_in_points','points_lower'));
?>
<div class="control-group">
    <label for="gu_points" class="control-label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
    <div class="controls">
    	<input type="text" id="gu_points" name="update_data[price_in_points]" size="6" value="">
    	<select name="update_data[price_in_points_type]">
    	    <option value="A" ><?php echo $_smarty_tpl->__("points_lower");?>
</option>
    	    <option value="P" >%</option>
    	</select>
    </div>
</div><?php }} ?>
