<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:39:43
  from 'C:\xampp\htdocs\ps\prestashop\themes\classic\templates\errors\maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb2df272724_33938967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2850170fe6040a3446a35982955ed66e45f36c01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\themes\\classic\\templates\\errors\\maintenance.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64acb2df272724_33938967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131124774464acb2df269039_10487058', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_133467966264acb2df269a01_11530192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_175475143064acb2df26d067_42462221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_39256774964acb2df26dfc9_81191965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_120894546764acb2df26dc24_46761219 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39256774964acb2df26dfc9_81191965', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_97762277664acb2df2695d0_92004981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133467966264acb2df269a01_11530192', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175475143064acb2df26d067_42462221', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120894546764acb2df26dc24_46761219', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_64672356764acb2df271121_08337137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_120557472664acb2df270d41_02406823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64672356764acb2df271121_08337137', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_132995962064acb2df271e17_12960930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_131124774464acb2df269039_10487058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_131124774464acb2df269039_10487058',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_97762277664acb2df2695d0_92004981',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_133467966264acb2df269a01_11530192',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_175475143064acb2df26d067_42462221',
  ),
  'page_header' => 
  array (
    0 => 'Block_120894546764acb2df26dc24_46761219',
  ),
  'page_title' => 
  array (
    0 => 'Block_39256774964acb2df26dfc9_81191965',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_120557472664acb2df270d41_02406823',
  ),
  'page_content' => 
  array (
    0 => 'Block_64672356764acb2df271121_08337137',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_132995962064acb2df271e17_12960930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97762277664acb2df2695d0_92004981', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120557472664acb2df270d41_02406823', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132995962064acb2df271e17_12960930', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
