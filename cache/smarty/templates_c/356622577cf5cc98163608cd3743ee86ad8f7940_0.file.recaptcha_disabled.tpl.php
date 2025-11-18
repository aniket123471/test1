<?php
/* Smarty version 4.5.5, created on 2025-11-18 06:36:20
  from 'C:\wamp64\www\test1\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c13e42bef40_66950403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356622577cf5cc98163608cd3743ee86ad8f7940' => 
    array (
      0 => 'C:\\wamp64\\www\\test1\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1762849167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c13e42bef40_66950403 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
