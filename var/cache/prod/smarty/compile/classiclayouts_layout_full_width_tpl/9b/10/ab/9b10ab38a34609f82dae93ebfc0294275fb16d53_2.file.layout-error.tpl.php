<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:39:43
  from 'C:\xampp\htdocs\ps\prestashop\themes\classic\templates\layouts\layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb2df3c48f8_83433927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b10ab38a34609f82dae93ebfc0294275fb16d53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\themes\\classic\\templates\\layouts\\layout-error.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
  ),
),false)) {
function content_64acb2df3c48f8_83433927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187383707264acb2df3bd014_29596806', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165708424564acb2df3be639_74807779', 'head_icons');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145186688164acb2df3bfa98_06034904', 'stylesheets');
?>


  </head>

  <body>

    <div id="layout-error">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63806488064acb2df3c4405_09980963', 'content');
?>

    </div>

  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_138910422164acb2df3bd3d7_80185503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_80193827664acb2df3bd9d8_43276900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_65345346364acb2df3bded3_21051725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_187383707264acb2df3bd014_29596806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_187383707264acb2df3bd014_29596806',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_138910422164acb2df3bd3d7_80185503',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_80193827664acb2df3bd9d8_43276900',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_65345346364acb2df3bded3_21051725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138910422164acb2df3bd3d7_80185503', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80193827664acb2df3bd9d8_43276900', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65345346364acb2df3bded3_21051725', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_icons'} */
class Block_165708424564acb2df3be639_74807779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_165708424564acb2df3be639_74807779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
   <?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_145186688164acb2df3bfa98_06034904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_145186688164acb2df3bfa98_06034904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
?>
    <?php
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_63806488064acb2df3c4405_09980963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_63806488064acb2df3c4405_09980963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
}
