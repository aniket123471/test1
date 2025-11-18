<?php
/* Smarty version 4.5.5, created on 2025-11-18 06:12:30
  from 'C:\wamp64\www\test1\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c0e4ececb06_54666400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43e2b143c1f1dfef66540bd5739d8df4cbef7cd1' => 
    array (
      0 => 'C:\\wamp64\\www\\test1\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1762849182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c0e4ececb06_54666400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\test1\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
