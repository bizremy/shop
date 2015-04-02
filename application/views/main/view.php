<?php
$host=HOST;
$value=$data[str];
echo "<h2>$value[title]</h2>";
echo "<img class='img_view' src='/$value[img_url]'/>";
echo"<div class='right'>";
echo "<button  class='href_view' onclick='cart($el,$value[price])'> Купить</button>";
echo "<span class='price'>$value[price] Грн</span>";
?>
    <div class="ratingBar">
        <div class="rating">
            <div class="ratZero"></div>
            <div class="ratDone"></div>
            <div class="ratHover"></div>
        </div>
        <div class="ratBlocks"></div>
        <div class="ratStat"></div>
    </div>
<?php
echo "<span class='desc_view' >$value[main]</span></div>";;
echo "<hr>";
echo "<span class='desc_view' >$value[description]</span>";
echo "<hr>";