<?php

if(!empty($data[column]))
    foreach($data[column] as $el=>$value)
    {
        echo '<li><a href ="'.HOST.'/main/subcategory/'.$el.'">'.$value.'</a></li>';
    }