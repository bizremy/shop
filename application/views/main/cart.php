<div id="id_seller"></div>
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

    if(!empty($data))
    {
        foreach($data as $el=>$value)
            echo "<tr><td name=title>$value[title]</td>
          <td><img class=img_cart src=/$value[img_url]></td>
          <td name=price>$value[price]</td>
          <input type=hidden name=id value=$el>
          <td><input type='text' name=count value=$value[count] size=2></td>
          <td name=totalsum>".$value[price]*$value[count]."</td>
<td><div class='delete'><span>$el</span></div></td>
</tr>";
    }
    else
        echo 'нет товаров в корзине'
    ?>
    <tr><td colspan=6>К оплате:<span id="sum"></span></td></tr>
</table>
<div id="modal_form">
    <span id="modal_close">X</span>
    <h2>Личные данные</h2>
    <form method="POST" name="setCart"   enctype=multipart/form-data>
        <p>ФИО</p>
        <p> <input type=" text" name="name" size="20" /></p>
        <p>Телефон</p>
        <p> <input type=" text" name="phone" size="20" /></p>
        <p>email</p>
        <p> <input type=" text" name="email" size="20" /></p>
        <p>Адрес</p>
        <p> <input type=" text" name="address" size="40" /></p>
        <p>Коментарий</p>
       <p> <textarea name="coment" cols="40" rows="3"></textarea></p>
        <p><input class="submit" type="submit" value="добавить"/></p>
        <div id="preview"></div>
    </form>
</div>

<div id="overlay"></div>
