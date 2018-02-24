<?php

class FRSController extends \Phalcon\Mvc\Controller
{

    public function buatFRSSetujuAction()
    {
    	$this->view->pick("FRS/buatFRSSetuju");
    }

    public function buatFRSBelumAction()
    {
    	$this->view->pick("FRS/buatFRSBelum");
    }

    public function buatFRSFullAction()
    {
    	$this->view->pick("FRS/buatFRSFull");
    }

    public function jadwalKuliahAction()
    {
        $this->view->pick("FRS/jadwalKuliah");
    }

}

