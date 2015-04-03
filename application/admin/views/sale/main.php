<table>
    <tr>
        <th>Id</th>
        <th>ФИО</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th>Email</th>

        <th>Сума</th>
        <th>Просмотр</th>
        <th>Удалить</th>

    </tr>
    <?php

    if(!empty($data))
    {
        foreach($data as $el=>$value)
            echo "<tr><td>$el</td>
            <td>$value[name]</td>
            <td>$value[address]</td>
             <td>$value[phone]</td>
             <td>$value[email]</td>

             <td>$value[sum]</td>
             <td><a href='$host/admin/sale/view/$el'><img src='/images/add.gif' /></a></td>
<td><div class='delete'><span>$el</span></div></td>


</tr>";
    }
    else
        echo 'нет данных'
    ?>
</table>