<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 00:25:47
         compiled from "/var/www/html/market/design/backend/templates/common/analytics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181012216955db8bdb7a9573-54851839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd824e208aa619f30018c4562670fb3e328add1' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/common/analytics.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '181012216955db8bdb7a9573-54851839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55db8bdb7ae672_49551146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db8bdb7ae672_49551146')) {function content_55db8bdb7ae672_49551146($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/market/app/functions/smarty_plugins/block.inline_script.php';
?><!-- GA code -->
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-40339423-1']);
    _gaq.push(['_setDomainName', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_host'], ENT_QUOTES, 'UTF-8');?>
']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!-- GA code end -->
<?php }} ?>
