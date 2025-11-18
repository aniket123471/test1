<?php
     class beforeClass
     {

        // before save hook
         function beforeMethod($bean, $event, $arguments)
         {
           //Custom Logic
 global $current_user;

           $GLOBALS['log']->fatal("Lead created by : ". $current_user->user_name. " On " . date("y-m-d h-i-s")) . $bean->name;

         }

        //  after delete hook
         function afterdeleteMethod($bean, $event, $arguments)
         {
           //Custom Logic
 global $current_user;

           $GLOBALS['log']->fatal("Lead Deleted by : ". $current_user->user_name. " On " . date("y-m-d h-i-s"));

         }
     }