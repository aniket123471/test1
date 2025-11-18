<?php
/* Smarty version 4.5.5, created on 2025-11-18 06:14:54
  from 'C:\wamp64\www\test1\include\ListView\ListViewButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691c0eded87a80_95626060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c37bd21e34b20d9782d8e51eb3ec70782ab630b' => 
    array (
      0 => 'C:\\wamp64\\www\\test1\\include\\ListView\\ListViewButtons.tpl',
      1 => 1762849182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691c0eded87a80_95626060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\test1\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
if ((isset($_smarty_tpl->tpl_vars['form']->value['buttons']))) {?>
<ul class="list-view-action-buttons">

    <?php echo smarty_function_counter(array('assign'=>"num_action_buttons",'start'=>0,'print'=>false),$_smarty_tpl);?>

    <?php if (count($_smarty_tpl->tpl_vars['form']->value['buttons']) > $_smarty_tpl->tpl_vars['num_action_buttons']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
        <?php if (is_array($_smarty_tpl->tpl_vars['button']->value) && $_smarty_tpl->tpl_vars['button']->value['customCode']) {?><li><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['button']->value['customCode'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?> </li><?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</ul>
<?php }
}
}
