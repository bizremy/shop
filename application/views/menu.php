<?php
include_once "/../models/model_main.php";
$menu=model_main::menu();
if(!empty($menu))
    foreach($menu as $el=>$value)
    {
        echo '<li><a href ="'.HOST.'/main/index/'.$el.'">'.$value.'</a></li>';
    }