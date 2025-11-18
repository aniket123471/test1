<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A valid Entry Point');

global $current_user;

// echo "<pre>";
// print_r($current_user->name ?? 'nothing');

if($current_user && !empty($current_user->id)){
   echo "<h1>Hello <mark>".($current_user->name)."</mark>, welcome to SuiteCRM Developer Test!</h1>";

}


