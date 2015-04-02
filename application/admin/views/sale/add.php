Добавить товар
<table>
    <tr>
        <th>Id</th>
        <th>Заголовок</th>
        <th>Цена</th>
        <th>Подкатегория</th>
        <th>Добавить</th>
    </tr>
    <?php

    if(!empty($data))
    {
        foreach($data as $el=>$value)
            echo "<tr><td>$el</td>
            <td>$value[title]</td>
            <td>$value[price]</td>
             <td>$value[stitle]</td>

<td><a href='$host/admin/goods/addgoods/$el'><img src='/images/add.gif' /></a></td>

</tr>";
    }
    else
        echo 'нет данных'
    ?>
</table>