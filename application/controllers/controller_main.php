<?php

class controller_main extends Controller {

    function __construct() {
       $this->model = new model_main();
        $this->view = new View();
        $this->view->temlateView = 'application/views/template.php';
    }

    public function action_index($id) {

        $data = $this->model->getData($id);
        $this->view->title=$data[title];
        $this->view->generate('main/main.php',$data);
    }
    public function action_subcategory($id){
        $data=$this->model->getSubcategory($id);
        $this->view->title=$data[title];
         $this->view->generate('main/main.php',$data);
    }
    public function action_view($id){
        $data=$this->model->getView($id);
        $this->view->title=$data[title];
        $this->view->generate('main/view.php',$data);
    }



}
