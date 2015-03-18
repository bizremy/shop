<li><a href ="" id="go">Добавить Товар</a></li>
<?php
if(!empty($data[menu]))
    foreach($data[menu] as $el=>$value)
    {
        echo '<li><a href ="'.HOST.'/admin/goods/index/'.$el.'">'.$value.'</a></li>';
    }

