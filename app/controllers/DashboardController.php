                                        <?php

class DashboardController extends \Phalcon\Mvc\Controller
{

    public function homeMahasiswaAction()
    {
    	$this->view->pick("Dashboard/homeMahasiswa");
    }

    public function homeDosenAction()
    {
        $this->view->pick("Dashboard/homeDosen");
    }

    public function homeKaprodiAction()
    {
        $this->view->pick("Dashboard/homeKaprodi");
    }

    public function blankAction()
    {
        $this->view->pick("Dashboard/blank");
    }

    public function index2Action()
    {
    	$this->view->pick("Dashboard/index2");
    }

    public function index3Action()
    {
    	$this->view->pick("Dashboard/index3");
    }

}

