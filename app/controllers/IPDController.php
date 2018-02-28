<?php

class IPDController extends \Phalcon\Mvc\Controller
{

    public function buatKuisionerAction()
    {
		$this->view->pick("IPD/buatKuisioner");
    }

    public function isiKuisionerAction()
    {
		$this->view->pick("IPD/isiKuisioner");
    }

    public function lihatHasilIPDDepartemenAction()
    {
		$this->view->pick("IPD/lihatHasilIPDDepartemen");
    }

    public function lihatHasilIPDDosenAction()
    {
		$this->view->pick("IPD/lihatHasilIPDDosen");
    }

    public function lihatKuesionerIPDAction()
    {
		$this->view->pick("IPD/lihatKuesionerIPD");
    }

}		