<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:45:15
  from 'C:\xampp\htdocs\ps\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb42bddcf14_64665511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4d4fa82a5a607ce79aba9ee2bc9c96a3cdef859' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64acb42bddcf14_64665511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\ps\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\e4\\d4\\fa\\e4d4fa82a5a607ce79aba9ee2bc9c96a3cdef859_2.file.helpers.tpl.php',
    'uid' => 'e4d4fa82a5a607ce79aba9ee2bc9c96a3cdef859',
    'call_name' => 'smarty_template_function_renderLogo_10583923364acb42bdd7da7_09328512',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_10583923364acb42bdd7da7_09328512 */
if (!function_exists('smarty_template_function_renderLogo_10583923364acb42bdd7da7_09328512')) {
function smarty_template_function_renderLogo_10583923364acb42bdd7da7_09328512(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_10583923364acb42bdd7da7_09328512 */
}
