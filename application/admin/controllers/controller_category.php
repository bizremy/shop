<?php
class controller_category extends Controller
{
    function __construct()
    {
        session_start();
        if($_SESSION['admin']=='123') {
            $this->model = new model_category();
            $this->view = new View();
            $this->view->temlateView = 'application/admin/views/template.php';
        }
        else{
            header('Location:'.HOST.'/admin/login');
        }


    }
    public function action_index()
    {
        $this->view->column="category/column.php";
        $this->view->title="Категории";
        $data= $this->model->getCategory();
        $this->view->generate("category/main.php",$data);
    }
    public function action_create()
    {
            $this->model->createCategory($_POST["title"]);
    }
    public function action_update($id)
    {
        $this->view->title="Изменить поле";
        $data=$this->model->updateCategory($id);
        $this->view->generate("category/update.php",$data);
    }
    public function action_save()
    {
        $this->model->saveCategory($_POST['id'],$_POST['title']);
        //header("url=$host/admin/category");
        echo '<meta http-equiv="refresh" content="0; url='.HOST.'/admin/category"">';

    }
    public function action_delete()
    {
        $this->model->deleteCategory($_POST['id']);
    }

}