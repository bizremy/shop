<?php
class controller_main extends Controller{

    function __construct() {
        session_start();
        if($_SESSION['admin']=='123') {
            $this->model = new model_main();
            $this->view = new View();
            $this->view->temlateView = 'application/admin/views/template.php';
        }
        else{
            header('Location:'.HOST.'/admin/login');
        }
        //$this->view->columnView='column.php';
    }
    public function action_index()
    {

            $this->view->title = "Админка";
            $this->view->generate('main.php');


    }

}