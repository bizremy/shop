<?php

include_once "/../models/model_main.php";
$menu=model_main::menu();
$host-HOST;
if(!empty($menu)) {
    echo "<ul>";
    foreach ($menu as $el => $value) {
        echo '<li><a href ="' . HOST . '/main/category/' . $el . '">' . $value . '</a></li>';
    }
    echo "</ul>";
    echo "<span id = small_cart>

<a href='$host/main/cart'>
<img src='/images/cart1.png'  border='0'/>Товаров:<span id='cartcount'>0</span></a>";
}
