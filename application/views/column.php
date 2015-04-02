<?php
if(!empty($data[column])) {
    echo "<h1>$data[title]</h1>";
    foreach ($data[column] as $el => $value) {
        echo '<li><a href ="' . HOST . '/main/subcategory/' . $el . '">' . $value . '</a></li>';
    }
}