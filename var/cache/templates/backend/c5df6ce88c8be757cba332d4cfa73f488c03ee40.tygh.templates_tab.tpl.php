<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 18:02:55
         compiled from "/var/www/html/market/design/backend/templates/views/debugger/components/templates_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122423215255dc839f670ec4-04085459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df6ce88c8be757cba332d4cfa73f488c03ee40' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/debugger/components/templates_tab.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122423215255dc839f670ec4-04085459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'name' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc839f683c33_55235868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc839f683c33_55235868')) {function content_55dc839f683c33_55235868($_smarty_tpl) {?><div class="deb-tab-content" id="DebugToolbarTabTemplatesContent">
    <h1>Template tree</h1>
    <div class="tree">
        <?php echo $_smarty_tpl->getSubTemplate ("views/debugger/components/templates_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('list'=>$_smarty_tpl->tpl_vars['data']->value['tpls']), 0);?>

    </div>

    <div class="deb-variables">
        <h4>Variables</h4>
        <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['vars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["var"]->key;
?>
            <a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } ?>
    </div>
    <table class="deb-table">
        <caption>Template variables</caption>
        <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['vars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["var"]->key;
?>
            <tr>
                <td valign="top"><strong><a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a></strong></td>
                <td><pre><code><?php echo htmlspecialchars(var_dump($_smarty_tpl->tpl_vars['var']->value), ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
            </tr>
        <?php } ?>
    </table>
</div><?php }} ?>
