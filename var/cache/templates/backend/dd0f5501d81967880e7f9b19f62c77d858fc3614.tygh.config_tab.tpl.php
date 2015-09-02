<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 18:03:36
         compiled from "/var/www/html/market/design/backend/templates/views/debugger/components/config_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147416266755dc83c8066b30-95367913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0f5501d81967880e7f9b19f62c77d858fc3614' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/debugger/components/config_tab.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '147416266755dc83c8066b30-95367913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'name' => 0,
    'value' => 0,
    'settings' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc83c80a39d3_28756302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc83c80a39d3_28756302')) {function content_55dc83c80a39d3_28756302($_smarty_tpl) {?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <table class="deb-table">
            <caption>Config</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object'||$_smarty_tpl->tpl_vars['value']->value==='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource'||$_smarty_tpl->tpl_vars['value']->value==='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php }} ?>
