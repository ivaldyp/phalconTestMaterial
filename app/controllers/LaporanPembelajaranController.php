<?php

class LaporanPembelajaranController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function homeAction()
    {
    	$this->view->pick("LaporanPembelajaran/home");
    }

}

