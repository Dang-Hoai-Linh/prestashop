<?php
/* Smarty version 4.3.1, created on 2023-07-11 08:40:01
  from 'C:\xampp\htdocs\ps\prestashop\modules\ps_mbo\views\templates\hook\dashboard-zone-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64acb2f1d98f05_51431578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a90a263356ea1f8d95d6e723b9e83984334aea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\prestashop\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-one.tpl',
      1 => 1684156533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64acb2f1d98f05_51431578 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-tips-and-update-container'));
      });
    }
  } else {
    const renderTipsAndUpdate = window.mboCdc.renderDashboardTipsAndUpdate

    const dashboardTipsAndUpdateContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderTipsAndUpdate(dashboardTipsAndUpdateContext, '#cdc-tips-and-update-container')
  }
<?php echo '</script'; ?>
>

<section id="cdc-tips-and-update-container" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
