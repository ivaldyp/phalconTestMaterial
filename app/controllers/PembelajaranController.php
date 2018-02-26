<?php

class PembelajaranController extends \Phalcon\Mvc\Controller
{

    public function ubahTUDosenWaliAction()
    {
    	$this->view->pick("Pembelajaran/ubahTUDosenWali");
    }

    public function lihatDosenDosenWaliAction()
    {
        $this->view->pick("Pembelajaran/lihatDosenDosenWali");
    }

    public function lihatAbsenPembelajaranAction()
    {
        $this->view->pick("Pembelajaran/lihatAbsenPembelajaran");
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

