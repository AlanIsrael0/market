<?php /* Smarty version Smarty-3.1.21, created on 2015-08-25 18:03:24
         compiled from "/var/www/html/market/design/backend/templates/views/debugger/components/sql_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94038728055dc83bc02b821-92212124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058a146f48fd766691f670ef4a73375f31919c9d' => 
    array (
      0 => '/var/www/html/market/design/backend/templates/views/debugger/components/sql_tab.tpl',
      1 => 1435242660,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94038728055dc83bc02b821-92212124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'query' => 0,
    'long_query_time' => 0,
    'medium_query_time' => 0,
    'color' => 0,
    'key' => 0,
    'debugger_hash' => 0,
    'average_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55dc83bc05e955_78612852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc83bc05e955_78612852')) {function content_55dc83bc05e955_78612852($_smarty_tpl) {?><div class="deb-tab-content" id="DebugToolbarTabSQLContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabSQLList">Queries list</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabSQLCount">Queries count</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabSQLParse">Queries parse</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLList">
        <table class="deb-table" id="DebugToolbarSubTabSQLListTable">
            <caption>Queries <small class="deb-font-gray">time: <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</small></caption>
            <tr>
                <th>№</th>
                <th>Query</th>
                <th width="60px">Time</th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars["query"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["query"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["query"]->key => $_smarty_tpl->tpl_vars["query"]->value) {
$_smarty_tpl->tpl_vars["query"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["query"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light-red", null, 0);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light2-red", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable(false, null, 0);?>
                <?php }?>
                <tr>
                    <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>"><a href="<?php echo htmlspecialchars(fn_url("debugger.sql_parse?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)."&sql_id=".((string)$_smarty_tpl->tpl_vars['key']->value)), ENT_QUOTES, 'UTF-8');?>
" ca-data-target-id="DebugToolbarSubTabSQLParse" data-ca-target-id="DebugToolbarSubTabSQLParse" class="cm-ajax cm-ajax-cache"><pre><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre></a></td>
                    <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                </tr>

            <?php } ?>
        </table>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLCount">
        <table class="deb-table">
            <caption>Queries <small class="deb-font-gray">max count: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['totals']['rcount'], ENT_QUOTES, 'UTF-8');?>
</small></caption>
            <tr>
                <th>Query</th>
                <th>Count</th>
                <th>Min time</th>
                <th>Max time</th>
                <th>Average time</th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars["query"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["query"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["query"]->key => $_smarty_tpl->tpl_vars["query"]->value) {
$_smarty_tpl->tpl_vars["query"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["average_time"] = new Smarty_variable($_smarty_tpl->tpl_vars['query']->value['total_time']/$_smarty_tpl->tpl_vars['query']->value['count_time'], null, 0);?>
                <tr>
                    <td class="sql"><pre><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
                    <td width="60px"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['count'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    <td width="60px"><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['min_time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    <td width="60px"><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['max_time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    <td width="120px"><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['average_time']->value,"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                </tr>

            <?php } ?>
        </table>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabSQLParse">
        <form action="admin.php" method="post" class="cm-ajax" id="DebugToolbarSqlParce">
            <input type="hidden" name="result_ids" value="DebugToolbarSubTabSQLParse" />
            <input type="hidden" name="dispatch[debugger.sql_parse]" value="save" />
            <input type="hidden" name="exec" value="N" />
            <table width="100%">
                <tr>
                    <td colspan="2"><textarea cols="100" rows="20" name="query"></textarea></td>
                </tr>
                <tr>
                    <td width="100px"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>"Send",'but_id'=>"DebugToolbarSubTabSQLParseSubmit",'but_meta'=>"btn-primary"), 0);?>
</td>
                    <td valign="middle">
                        <label><input type="checkbox" name="exec" value="Y" checked="checked" /> Sandbox</label>
                    </td>
                </tr>
            </table>           
        </form>
    </div>

<!--DebugToolbarTabSQLContent--></div>
<?php }} ?>
