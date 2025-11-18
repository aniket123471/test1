<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A valid Entry Point');
     class test_aui_class
     {
         function test_aui_method($bean, $event, $arguments)
         {
            global $current_user;
        
    if($_REQUEST['module'] == 'Contacts' || $_REQUEST['module'] == 'Leads' || $_REQUEST['module'] == 'Vendors' || $_REQUEST['module'] == 'Accounts' || $_REQUEST['module'] == 'Cases'){

    $GLOBALS['log']->fatal("application level hook After UI for min 5 modules - module name : " . $_REQUEST['module'] . " created by : $current_user->user_name  (ID : {$current_user->id})");

    }
         }
     }

