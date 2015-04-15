<?php
class controller_sale extends  Controller
{
    function __construct()
    {
        session_start();
        if ($_SESSION['admin'] == '123') {
            $this->model = new model_sale();
            $this->view = new View();
            $this->view->temlateView = 'application/admin/views/template.php';
        } else {
            header('Location:' . HOST . '/admin/login');
        }
    }

    public function action_index()
    {
        $this->view->title = "Заказы";
        $data = $this->model->getSeller();
        $this->view->generate("sale/main.php", $data);
    }

    public function action_view($id)
    {
        $this->view->title = 'Закказ номер ' . $id;
        $data = $this->model->getSale($id);
        $this->view->generate("sale/view.php", $data);

    }


    public function action_delete()
    {
        $this->model->deleteSale($_POST['id']);
    }
}