<?php
class Route
{



    static function start()
    {
        $controller_name='main';
        $action_name='index';
        global $id;
        $routes=  explode('/', $_SERVER['REQUEST_URI']);
        if($routes[1]=='admin') {
            if (!empty($routes[2]))
                $controller_name = $routes[2];
            if (!empty($routes[3]))
                $action_name = $routes[3];
            if (!empty($routes[4]))
                $id = $routes[4];
            $model_name='model_'.$controller_name;
            $controller_name='controller_'.$controller_name;
            $action_name='action_'.$action_name;
            $controller_path='application/admin/controllers/'.$controller_name.'.php';
            $model_path='application/admin/models/'.$model_name.'.php';
        }
        else {
            if (!empty($routes[1]))
                $controller_name = $routes[1];
            if (!empty($routes[2]))
                $action_name = $routes[2];
            if (!empty($routes[3]))
                $id = $routes[3];
            $model_name='model_'.$controller_name;
            $controller_name='controller_'.$controller_name;
            $action_name='action_'.$action_name;
            $controller_path='application/controllers/'.$controller_name.'.php';
            $model_path='application/models/'.$model_name.'.php';
        }

        if(file_exists($controller_path))
        {
            require_once $controller_path;
        }

        if(file_exists($model_path))
        {
            require_once $model_path;
        }
        $controller= new $controller_name;
        if (method_exists($controller, $action_name))
        {
            $controller->$action_name($id);
        }


    }


    /**
     * @return string
     */



}

