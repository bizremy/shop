<h2>Информация о покупателе</h2>
<table>
<tr>
        <th>Id</th>
        <th>ФИО</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th>Email</th>
        <th>Комент</th>
        <th>Сума</th>


    </tr>
    <?php
$value =$data[str];
            echo "<tr><td>$value[id]</td>
            <td>$value[name]</td>
            <td>$value[address]</td>
             <td>$value[phone]</td>
             <td>$value[email]</td>
             <td>$value[coment]</td>
             <td>$value[sum]</td>

</tr></table>";
?>
    <h2>Подробно о заказе</h2>
    <table name="cart" id="cart">
        <tr>

            <th>Наимонование</th>
            <th>Фото</th>
            <th>Стоимость</th>
            <th>Количество</th>
            <th>Сумма</th>
            <th>Удалить</th>

        </tr>
        <?php
        if(!empty($data[strSale]))
        {
            foreach($data[strSale] as $el=>$value)
                echo "<tr><td name=title>$value[title]</td>
          <td><img class=img_cart src=/$value[img_url]></td>
          <td name=price>$value[price]</td>
          <input type=hidden name=id value=$el>
          <td><input type='text' name=count value=$value[quantity] size=2></td>
          <td name=totalsum>".$value[price]*$value[quantity]."</td>
<td><div class='delete'><span>$el</span></div></td>
</tr>";
        }
        else
            echo 'нет товаров в корзине'
        ?>
        <tr><td colspan=6>К оплате:<span id="sum"></span></td></tr>
    </table>
    <div id="goodsView">Добавить товар</div>
    <div id="results">

    </div>