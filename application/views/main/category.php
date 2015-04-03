<?php
$host=HOST;
if(!empty($data[str])) {

    foreach ($data[str] as $el => $value) {
        if($value[voters]!=0) {
            $vote=$value[vote];
            $voters=$value[voters];
            $ratingText= round($vote / $voters,1);
            $rating = ($vote / $voters * 17) . 'px';
        }
        else{
            $ratingText=0;
            $voters=0;
            $rating=0;
        }
        echo "<h2>$value[title]</h2>";
        echo "<img class='img_view' src='/$value[img_url]'/>";
        echo"<div class='right'><a class='href_view' href='$host/main/view/$el'>Подробнее</a>";
        echo "<button  class='href_view' onclick='cart($el,$value[price])'> Купить</button>";
        echo "<span class='price'>$value[price] Грн</span>";
        echo "<div class=ratZero></div>";
        echo "<div class=ratDone style='width: $rating';></div>";
        echo "<div class='ratStat'>Рейтинг: <strong>$ratingText</strong> Голосов: <strong>$voters</strong></div>";

        echo "<span class='desc_view' >$value[main]</span></div>";
        echo "<hr>";
    }
}

