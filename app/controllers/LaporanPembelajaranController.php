<?php

class LaporanPembelajaranController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function buatBeritaAcaraAction()
    {
    	$this->view->pick("LaporanPembelajaran/buatBeritaAcara");
    }

}

