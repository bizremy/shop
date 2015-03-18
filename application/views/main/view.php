<?php
$host=HOST;
$value=$data[str];
echo "<h2>$value[title]</h2>";
echo "<img class='img_view' src='/$value[img_url]'/>";
echo"<div class='right'><a class='href_view' href='$host/main/view/$el'>Читать далее</a>";
echo"<a class='href_view' href='$host/main/view/$el'>купить</a>";
echo "<span class='price'>$value[price] Грн</span>";
echo "<span class='desc_view' >$value[main]</span></div>";
echo "<hr>";
echo "<span class='desc_view' >$value[description]</span>";
echo "<hr>";