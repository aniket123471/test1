<?php

require_once('include/MVC/View/Views/view.detail.php');

class LeadsViewDetail extends ViewDetail
{
    public function preDisplay()
    {
        parent::preDisplay();

        $this->ss->assign('customCSS', '<link rel="stylesheet" href="custom/CSS/test_Lead.css"> ');
    }

    public function display()
    {
        echo $this->ss->get_template_vars('customCSS');
        parent::display();
    }
}
