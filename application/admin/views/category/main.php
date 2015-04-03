<table>
    <tr>
        <th>Id</th>
        <th>Категории</th>
        <th>Удалить</th>
        <th>Обновить</th>

    </tr>
  <?php

foreach($data as $el=>$value)
  echo "<tr><td>$el</td><td>$value</td>
<td><div class='delete'><span>$el</span></div></td>

<td><a href='$host/admin/category/update/$el'><img src='/images/update.png' /></a></td>
</tr>";
?>
</table>


<div id="modal_form">
    <span id="modal_close">X</span>
    <h2>Добавить категорию</h2>
    <form method="POST" name="createCategory" >

        <p>заголовок</p>  <p> <input type=" text" name="title"/></p>
        <p><input class="submit" type="submit" value="Добавить"/></p>
    </form>
</div>
<div id="overlay"></div>

