<?php
 class controller_goods extends  Controller{
     function __construct(){
         session_start();
         if($_SESSION['admin']=='123') {
             $this->model = new model_goods();
             $this->view = new View();
             $this->view->temlateView = 'application/admin/views/template.php';
         }
         else{
             header('Location:'.HOST.'/admin/login');
         }
     }
     public function action_index($id)
     {
         $this->view->column="goods/column.php";
         $this->view->title="Товары";
         $data= $this->model->getGoods($id);
         $this->view->generate("goods/main.php",$data);
     }
     public function action_create()
     {
         $uploadfile = 'uploads/'.$_FILES['file']['name'];
         move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
        $this->model->createGoods($_POST["title"],$_POST["main"],$_POST['description'],
            $_POST['price'],$_POST['id_subcategory'],$uploadfile);
     }
     public function action_update($id)
     {
         $this->view->title="Изменить поле";
         $data=$this->model->updateGoods($id);
         $this->view->generate("goods/update.php",$data);
     }
     public function action_save()
     {
         $this->model->saveGoods($_POST['id'],$_POST["title"],$_POST["main"],$_POST['description'],
            $_POST['price'],$_POST['id_subcategory']);
         echo '<meta http-equiv="refresh" content="0; url='.HOST.'/admin/goods"">';

     }
     public function action_delete()
     {
         $this->model->deleteGoods($_POST['id']);
     }
     public function action_addgoods($id)
     {
         $this->view->column="goods/column.php";
         $this->view->title="Добавить товар";
         $data=$this->model->oneGoods($id);
         $this->view->generate("goods/add.php",$data);
     }
     public function action_add()
     {
         $this->model->addGoods($_POST['id_goods'],$_POST['quantity'],$_POST['info']);
         echo '<meta http-equiv="refresh" content="0; url='.HOST.'/admin/goods"">';
     }
 }