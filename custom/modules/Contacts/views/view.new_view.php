<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class Viewnew_view extends SugarView
{

        public function preDisplay()
    {
      $GLOBALS['log']->fatal("pre- new cutom view");
    }
        public function display()
    {
        global $sugar_config, $currentModule;

      $GLOBALS['log']->fatal("Display- new cutom view ==");
        $GLOBALS['log']->fatal(print_r($_REQUEST,true));
        $GLOBALS['log']->fatal("[".$_REQUEST['submitbutton']."]");
        

      $administration = BeanFactory::newBean('Administration'); 

      if($_POST['submitbutton'] == 'Submit'){
        // print_r($_POST);
        // die;
        $administration->saveSetting('new_view', 'fname', trim($_POST['fname']));
        $administration->saveSetting('new_view', 'lname', trim($_POST['lname']));
        $administration->saveSetting('new_view', 'email', trim($_POST['email']));
        $administration->saveSetting('new_view', 'message', trim($_POST['message']));
      }

        $retrieveSettings = $administration->retrieveSettings('new_view');
        $GLOBALS['log']->fatal($retrieveSettings->settings['new_view_fname']);
        
        $this->ss->assign("fname", $retrieveSettings->settings['new_view_fname']);
        $this->ss->assign("lname", $retrieveSettings->settings['new_view_lname']);
        $this->ss->assign("email", $retrieveSettings->settings['new_view_email']);
        $this->ss->assign("message", $retrieveSettings->settings['new_view_message']);
      $this->ss->display('custom/modules/contacts/tpls/new_view.tpl');

      $GLOBALS['log']->fatal("Custom setting loaded successfully");
    
  }
}