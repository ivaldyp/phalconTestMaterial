<?php

class PeriodeController extends \Phalcon\Mvc\Controller
{

    public function kalenderAkademikFRSAction()
    {
    	$this->view->pick("Periode/kalenderAkademikFRS");
    }

    public function kalenderAkademikIPDAction()
    {
    	$this->view->pick("Periode/kalenderAkademikIPD");
    }

    public function dataSekarangAction()
    {
    	$this->view->pick("Periode/dataSekarang");
    }

}

