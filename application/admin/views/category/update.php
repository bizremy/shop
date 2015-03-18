Обновить Категорию

<?php
echo  "Заголовок категории: ".$data['title'];
?>
<form method="POST" name="updateCategory" action="<?php echo HOST;?>/admin/category/save">
   <p> <input type=" text" name="title"/></p>
    <input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
   <p> <input type="submit" value="Изменить"/></p>
</form>
