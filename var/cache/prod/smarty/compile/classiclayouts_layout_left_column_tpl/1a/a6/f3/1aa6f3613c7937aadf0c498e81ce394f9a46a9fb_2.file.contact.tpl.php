<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:45:15
  from 'C:\xampp\htdocs\ps\prestashop\themes\classic\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb42b84d5b0_72007929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa6f3613c7937aadf0c498e81ce394f9a46a9fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\themes\\classic\\templates\\contact.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64acb42b84d5b0_72007929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81345777464acb42b846025_79277938', 'page_header_container');
?>


<?php if ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-left-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168976479564acb42b84a008_97957740', "left_column");
?>

<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-right-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109862769564acb42b84c3a0_44839718', "right_column");
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84795924664acb42b84cdb6_57681378', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_81345777464acb42b846025_79277938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_81345777464acb42b846025_79277938',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block "left_column"} */
class Block_168976479564acb42b84a008_97957740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_168976479564acb42b84a008_97957740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactLeftColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_109862769564acb42b84c3a0_44839718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_109862769564acb42b84c3a0_44839718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactRightColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "right_column"} */
/* {block 'page_content'} */
class Block_84795924664acb42b84cdb6_57681378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_84795924664acb42b84cdb6_57681378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactContent'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
