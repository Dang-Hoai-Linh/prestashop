<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:45:15
  from 'C:\xampp\htdocs\ps\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb42b938558_61063965',
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
function content_64acb42b938558_61063965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59275614164acb42b934bb1_27672259', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_47518102064acb42b935392_74760421 extends Smarty_Internal_Block
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
class Block_146041119664acb42b934f10_44134035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47518102064acb42b935392_74760421', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_34078509064acb42b936de9_40482425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_197403029364acb42b9372c1_21432971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_158497475864acb42b9369e8_00662865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34078509064acb42b936de9_40482425', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197403029364acb42b9372c1_21432971', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_55181763164acb42b937ca1_11481640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_165799755464acb42b9379a4_21308860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55181763164acb42b937ca1_11481640', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_59275614164acb42b934bb1_27672259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59275614164acb42b934bb1_27672259',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_146041119664acb42b934f10_44134035',
  ),
  'page_title' => 
  array (
    0 => 'Block_47518102064acb42b935392_74760421',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_158497475864acb42b9369e8_00662865',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_34078509064acb42b936de9_40482425',
  ),
  'page_content' => 
  array (
    0 => 'Block_197403029364acb42b9372c1_21432971',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_165799755464acb42b9379a4_21308860',
  ),
  'page_footer' => 
  array (
    0 => 'Block_55181763164acb42b937ca1_11481640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146041119664acb42b934f10_44134035', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158497475864acb42b9369e8_00662865', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165799755464acb42b9379a4_21308860', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
