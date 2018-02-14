<?php

class LaporanKeuanganController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function homeAction()
    {
    	$this->view->pick("LaporanKeuangan/home");
    }

}

