<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 00:26:17
         compiled from "/var/www/html/market/design/backend/templates/views/settings_wizard/components/ssl_checking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208038169955db8bf91f5fa1-47804844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c58861a29843b582af7150c6d6003bef241fd870' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/settings_wizard/components/ssl_checking.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '208038169955db8bf91f5fa1-47804844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checking_result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55db8bf92066e5_16510760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db8bf92066e5_16510760')) {function content_55db8bf92066e5_16510760($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('warning_https_disabled','ssl_certificate','check_ssl','fail','ok'));
?>
<div id="ssl_checking">
    <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
    <br>
    <div class="alert alert-block alert-error fade in">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <p><?php echo $_smarty_tpl->__("warning_https_disabled");?>
</p>
    </div>
    <?php }?>
    <br>
    <div class="control-group setting-wide">
        <label for="" class="control-label"><?php echo $_smarty_tpl->__("ssl_certificate");?>
</label>
        <div class="controls">
            <a class="btn cm-ajax" href="<?php echo htmlspecialchars(fn_url("settings_wizard.check_ssl"), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="ssl_checking"><?php echo $_smarty_tpl->__("check_ssl");?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
                <span class="label label-important"><?php echo $_smarty_tpl->__("fail");?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['checking_result']->value=="ok") {?>
                <span class="label label-success"><?php echo $_smarty_tpl->__("ok");?>
</span>
            <?php }?>
        </div>
    </div>
<!--ssl_checking--></div><?php }} ?>
