<?php
/*echo "<pre>";
print_r($data);
echo "</pre>";*/
$host=HOST;
if(!empty($data[str])) {
    foreach ($data[str] as $el => $value) {
        echo "<h2>$value[title]</h2>";
        echo "<img class='img_view' src='/$value[img_url]'/>";
        echo"<div class='right'><a class='href_view' href='$host/main/view/$el'>Читать далее</a>";
        echo "<button  class='href_view' onclick='cart($el,$value[price])'> Купить</button>";
        echo "<span class='price'>$value[price] Грн</span>";
       echo "<span class='desc_view' >$value[main]</span></div>";

        echo "<hr>";
    }
}

