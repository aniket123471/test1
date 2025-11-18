<?php

require_once 'custom/include/MyLogger.php';

     class userlogicClass
     {
         function userafterloginMethod($bean, $event, $arguments)
         {
          $GLOBALS['log']->fatal("user login success !! User = ". $bean->name . date(" y-m-d h:i:s"));
          MyLogger::write("User Have Logged in successfully ! name : ".  $bean->name ." ". date('y-m-d h-i-s') );
         }
    }