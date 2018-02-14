<?php

class LaporanKeuanganController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function historisSPPAction()
    {
    	$this->view->pick("LaporanKeuangan/historisSPP");
    }

}

