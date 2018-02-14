<?php

class DashboardController extends \Phalcon\Mvc\Controller
{

    public function homeAction()
    {
    	$this->view->pick("Dashboard/home");
    }

    public function index2Action()
    {
    	$this->view->pick("Dashboard/index2");
    }

}

