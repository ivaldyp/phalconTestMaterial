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

}		