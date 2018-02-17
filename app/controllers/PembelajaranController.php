<?php

class PembelajaranController extends \Phalcon\Mvc\Controller
{

    public function ubahDosenWaliAction()
    {
    	$this->view->pick("Pembelajaran/ubahDosenWali");
    }

    public function lihatKelasPembelajaranAction()
    {
    	$this->view->pick("Pembelajaran/lihatKelasPembelajaran");
    }

    public function buatKelasPembelajaranAction()
    {
    	$this->view->pick("Pembelajaran/buatKelasPembelajaran");
    }

}

