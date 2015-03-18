<table>
    <tr>
        <th>Id</th>
        <th>Подкатегории</th>
        <th>Категории</th>
        <th>Удалить</th>
        <th>Обновить</th>
    </tr>
  <?php

  if(!empty($data[str]))
  {
foreach($data[str] as $el=>$value)
  echo "<tr><td>$el</td><td>$value[title]</td>
          <td>$value[ctitle]</td>
<td><div class='delete'><span>$el</span></div></td>
<td><a href='$host/admin/subcategory/update/$el'><img src='/images/update.png' /></a></td>
</tr>";
  }
  else
  echo 'нет данных'
?>
</table>




<div id="modal_form">
    <span id="modal_close">X</span>
    <h2>Добавить категорию</h2>
    <form method="POST" name="createSubCategory" >
        <p>заголовок подкатегории</p>  <p> <input type=" text" name="title"/></p>
        <p>категория</p> <p> <select name="id_category" size="3" multiple="multiple">
                <?php
                foreach($data[rule] as $el=>$value){
                    echo "<option value=$el>$value</option>";
                }
                ?>

            </select></p>
        <p><input type="submit" value="добавить"/></p>
    </form>
</div>
<div id="overlay"></div>