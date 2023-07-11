<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:40:05
  from 'C:\xampp\htdocs\ps\prestashop\admin820iuypvkvyalbqnyjd\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb2f513b2b7_62039941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bf6995e6e7396569488581a2e3df4086a41928f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\admin820iuypvkvyalbqnyjd\\themes\\default\\template\\content.tpl',
      1 => 1684156533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64acb2f513b2b7_62039941 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
