Обновить Подrатегорию

<?php
echo  "<br>Заголовок категории: ".$data['title']."<br> Подкатегория:".$data['ctitle'];
?>
<form method="POST" name="updateCategory" action="<?php echo HOST;?>/admin/subcategory/save">
    <p> <input type=" text" name="title"/></p>
    <p> <select name="id_category" >
            <?php
            foreach($data[rule] as $el=>$value){
                echo "<option  value=$el>$value</option>";
            }
            ?>
        </select></p>
    <input type="hidden" name="id" value="<?php echo $data[id];?>"/>
    <p> <input type="submit" value="Изменить"/></p>
</form>