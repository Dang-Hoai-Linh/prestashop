<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:44:14
  from 'C:\xampp\htdocs\ps\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb3ee6f5167_10633851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2264eeda1a64deadf53fa9816a0a5cdc7ffb5e3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64acb3ee6f5167_10633851 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6427673164acb3ee6f0be4_54517118', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_40362641064acb3ee6f1373_95781937 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_91459243764acb3ee6f0f45_15880028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40362641064acb3ee6f1373_95781937', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_175032710464acb3ee6f39b9_78582100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_156405501364acb3ee6f3e65_71068842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11107511464acb3ee6f3656_47210608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175032710464acb3ee6f39b9_78582100', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156405501364acb3ee6f3e65_71068842', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_70597535764acb3ee6f4846_39009611 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_83858262464acb3ee6f4576_17837872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70597535764acb3ee6f4846_39009611', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_6427673164acb3ee6f0be4_54517118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6427673164acb3ee6f0be4_54517118',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_91459243764acb3ee6f0f45_15880028',
  ),
  'page_title' => 
  array (
    0 => 'Block_40362641064acb3ee6f1373_95781937',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11107511464acb3ee6f3656_47210608',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_175032710464acb3ee6f39b9_78582100',
  ),
  'page_content' => 
  array (
    0 => 'Block_156405501364acb3ee6f3e65_71068842',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_83858262464acb3ee6f4576_17837872',
  ),
  'page_footer' => 
  array (
    0 => 'Block_70597535764acb3ee6f4846_39009611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91459243764acb3ee6f0f45_15880028', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11107511464acb3ee6f3656_47210608', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83858262464acb3ee6f4576_17837872', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
