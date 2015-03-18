<?php
class controller_login extends Controller
{
    function __construct()
    {
        //$this->model = new model_login();
        $this->view = new View();
        $this->view->temlateView = 'application/admin/views/login/template.php';
    }

    public function action_index()
    {
        $this->view->column = "category/column.php";
        $this->view->title = "Авторизацмя";
      //  $data = $this->model->getCategory();
        $this->view->generate("login/login.php");
    }
    public function action_login(){
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        if($login=='admin' && $pass=="123"){
            session_start();
            $_SESSION['admin'] = $pass;
            header('Location:'.HOST.'/admin');
        }
        else{
            session_start();
            header('Location:'.HOST.'/admin/login');
        }
    }
   public function action_logout(){
       session_start();
       unset($_SESSION['admin']);
       session_destroy();
       header('Location:'.HOST);
   }

}
