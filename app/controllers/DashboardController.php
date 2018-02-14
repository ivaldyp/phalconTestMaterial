<?php

class DashboardController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->pick("Dashboard/intro");
    }

    public function index2Action()
    {
    	$this->view->pick("Dashboard/index2");
    }

}

