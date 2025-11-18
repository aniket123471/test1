<?php
$hook_version = 1;
$hook_array = Array();
 // position, file, function

//  $hook_array['before_save'] = Array();
//  $hook_array['before_save'][] = Array(77, 'before save hook', 'custom/modules/Accounts/before_save.php',
//   'beforeClass','beforeMethod');
// after login
 $hook_array['after_login'] = Array();
 $hook_array['after_login'][] = Array(1, 'after login hook', 'custom/modules/Users/logic_new.php',
  'userlogicClass','userafterloginMethod');
