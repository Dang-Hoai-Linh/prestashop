<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:41:02
  from 'C:\xampp\htdocs\ps\prestashop\admin820iuypvkvyalbqnyjd\themes\new-theme\template\components\layout\warning_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb32ea15b06_34928981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a2f188ce73d716fe274a2252be544728130db2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\admin820iuypvkvyalbqnyjd\\themes\\new-theme\\template\\components\\layout\\warning_messages.tpl',
      1 => 1684156533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64acb32ea15b06_34928981 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings.','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value)),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
