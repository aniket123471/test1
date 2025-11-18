<?php
/* Smarty version 4.5.5, created on 2025-11-18 06:15:37
  from 'C:\wamp64\www\test1\modules\Emails\templates\displayIndicatorField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c0f094b2103_70240245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e747f7da23aadd294a35ccbc54ac5e4a6192d1' => 
    array (
      0 => 'C:\\wamp64\\www\\test1\\modules\\Emails\\templates\\displayIndicatorField.tpl',
      1 => 1762849133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c0f094b2103_70240245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="email-indicator">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['status'] == 'unread') {?>
            <div class="email-new"></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['is_imported'] == true && $_smarty_tpl->tpl_vars['bean']->value['inbound_email_record'] == $_REQUEST['inbound_email_record']) {?>
            <div class="email-imported"><span class="glyphicon glyphicon-ok"></span></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['flagged'] == 1) {?>
            <span class="email-flagged">!</span>
        <?php }?>
    <?php }?>
</div>
<?php }
}
