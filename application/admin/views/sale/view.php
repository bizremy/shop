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


        </tr>
        <?php
        if(!empty($data[strSale]))
        {
            $totalsum=0;
            foreach($data[strSale] as $el=>$value) {
                $totalsum+=$value[price] * $value[quantity];
                echo "<tr><td name=title>$value[title]</td>
          <td><img class=img_cart src=/$value[img_url]></td>
          <td name=price>$value[price]</td>
          <input type=hidden name=id value=$el>
          <td>$value[quantity]</td>
          <td name=totalsum>" . $value[price] * $value[quantity] . "</td>
</tr>";
            }
        }
        else
            echo 'нет товаров в корзине'
        ?>
        <tr><td colspan=6>К оплате:<span id="sum"><?echo $totalsum;?></span></td></tr>
    </table>

