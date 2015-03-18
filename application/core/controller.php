<?php
class Controller
{
    public $model;
    public $view;

    function __construct() {
        $this->model=new Model();
        $this->view= new View();

    }
    public function action_index()
    {

    }
}
