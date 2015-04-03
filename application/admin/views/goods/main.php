<table>
    <tr>
        <th>Id</th>
        <th>Заголовок</th>
        <th>Цена</th>
        <th>Подкатегория</th>
        <th>Удалить</th>
        <th>Обновить</th>
    </tr>
    <?php
    if(!empty($data[str]))
    {
        foreach($data[str] as $el=>$value)
            echo "<tr><td>$el</td>
            <td>$value[title]</td>
            <td>$value[price]</td>
             <td>$value[stitle]</td>
<td><div class='delete'><span>$el</span></div></td>
<td><a href='$host/admin/goods/update/$el'><img src='/images/update.png' /></a></td>
</tr>";
    }
    else
        echo 'нет данных'
    ?>
</table>


<div id="modal_form">
    <span id="modal_close">X</span>
    <h2>Добавить товар</h2>
    <form method="POST" name="createGoods"   enctype=multipart/form-data>
        <p>заголовок товара/цена/подкатегория/фото</p>
        <p> <input type=" text" name="title" size="25" />
            <input type=" text" name="price" size="5"/>

            <select name="id_subcategory"  ">
            <?php
            foreach($data[rule] as $el=>$value){
                echo "<option value=$el>$value</option>";
            }
            ?>
            </select>
            <input type="file" name="file" required />
        </p>
        <textarea name="main" cols="40" rows="3"></textarea></p>
        <textarea name="editor1"></textarea>
        <script>

            CKEDITOR.replace( 'editor1');
        </script>

        <input class="submit" type="submit" value="добавить"/>
        <div id="preview"></div>
    </form>
</div>

<div id="overlay"></div>


