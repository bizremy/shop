Обновить товар
<?php
if(!empty($data['img_url'])){
    echo "<p><img src='/$data[img_url]' class='imga'/></p>";
}
?>
<form method="POST" name="updateGoods"   enctype=multipart/form-data >
    <p>заголовок товара/цена/подкатегория</p>
    <input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
    <p> <input type=" text" name="title" value="<?php echo $data['title'];?>" size="25" />
        <input type=" text" name="price" value="<?php echo $data['price'];?>"size="5"/>
        <select name="id_subcategory"  ">
        <?php
        foreach($data[rule] as $el=>$value){
            echo "<option value=$el>$value</option>";
        }
        ?>
        </select></p>
    <textarea name="main" cols="40" rows="3"><?php echo $data['main'];?></textarea></p>
    <textarea name="editor1"><?php echo $data['description'];?></textarea>
    <script>
        CKEDITOR.replace( 'editor1');
    </script>

    <p><input type="submit" value="добавить"/></p>
    <div id="preview"></div>
</form>