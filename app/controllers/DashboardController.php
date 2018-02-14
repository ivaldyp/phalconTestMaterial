<?php

class DashboardController extends \Phalcon\Mvc\Controller
{

    public function index3Action()
    {
    	$this->view->pick("Dashboard/index3");
    }

    public function index2Action()
    {
    	$this->view->pick("Dashboard/index2");
    }

}

