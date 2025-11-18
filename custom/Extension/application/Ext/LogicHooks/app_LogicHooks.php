<?php

if(!isset($hook_array) || !is_array($hook_array)){
    $hook_array = array();
}else{
    $hook_array['after_save'] = array();
}

$hook_array['after_save'][] = Array(10, "testing application Hook for min 5 modules", "custom/LogicHooks/afteruiframe.php", "test_aui_class", "test_aui_method");