<?php
class controller_subcategory extends Controller
{
    function __construct()
    {
        session_start();
        if($_SESSION['admin']=='123') {
            $this->model = new model_subcategory();
            $this->view = new View();
            $this->view->temlateView = 'application/admin/views/template.php';
        }
        else{
            header('Location:'.HOST.'/admin/login');
        }
    }
    public function action_index()
    {
        $this->view->column="subcategory/column.php";
        $this->view->title="Подкатегории";
        $data= $this->model->getSubCategory();
        $this->view->generate("subcategory/main.php",$data);
    }
    public function action_create()
    {

        $this->model->createSubCategory($_POST['id_category'],$_POST["title"]);
    }
    public function action_update($id)
    {
        $this->view->title="Изменить поле";
        $data=$this->model->updateSubCategory($id);
        $this->view->generate("subcategory/update.php",$data);
    }
    public function action_save()
    {
        $host=HOST;
        $this->model->saveSubCategory($_POST['id'],$_POST['title'],$_POST['id_category']);
        header("url=$host/admin/subcategory");

    }
    public function action_delete()
    {
        $this->model->deleteSubCategory($_POST['id']);
    }

}