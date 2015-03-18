<?php
class controller_main extends Controller{

    function __construct() {
        $this->model = new model_main();
        $this->view = new View();
        $this->view->temlateView='application/admin/views/template.php';

        //$this->view->columnView='column.php';
    }
    public function action_index()
    {
        session_start();
        if($_SESSION['admin']=='123') {
            $this->view->title = "Админка";
            $data = $this->model->getAdmin();
            $this->view->generate('main.php', $data);
        }
        else{
            header('Location:'.HOST.'/admin/login');
        }
    }

}