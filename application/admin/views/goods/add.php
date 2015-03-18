
    <h2>Товар</h2>
    <?php
    echo "<h3>$data[title]</h3>";
    echo "<h4>Цена :$data[price]</h4>";
    echo "<p><img src='/$data[img_url]' class='imga'/></p>";
    echo "<p>$data[description]</p>";

    ?>


    <div id="modal_form">
        <span id="modal_close">X</span>
        <h2>Добавить Товар</h2>
    <form method="POST" name="addGoods"  action="<?php echo HOST;?>/admin/goods/add" enctype=multipart/form-data>
        <p>количество</p>
        <p> <input type=" text" name="quantity" size="5" /></p>
        <p>Подробно об транзакции</p>
        <p>  <input type=" text" name="info" size="25"/></p>
        <input type="hidden" name="id_goods" value="<?php echo $data[id];?>">
        <p><input type="submit" value="добавить"/></p>
    </form>
    </div>
    <div id="overlay"></div>

