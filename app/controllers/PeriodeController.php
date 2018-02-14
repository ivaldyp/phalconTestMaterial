<?php

class PeriodeController extends \Phalcon\Mvc\Controller
{

    public function kalenderAkademikAction()
    {
    	$this->view->pick("Periode/kalenderAkademik");
    }

}

