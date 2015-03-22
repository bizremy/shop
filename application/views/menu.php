<?php

include_once "/../models/model_main.php";
$menu=model_main::menu();
$host-HOST;
if(!empty($menu)) {
    echo "<ul>";
    foreach ($menu as $el => $value) {
        echo '<li><a href ="' . HOST . '/main/index/' . $el . '">' . $value . '</a></li>';
    }
    echo "</ul>";
    echo " <span id = small_cart>Товаров : <span id='cartcount'>0</span>
 <br><a href='$host/main/cart'>Оформить</a></span>";
}
