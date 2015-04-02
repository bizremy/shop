<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../../../css/style.css" rel="stylesheet">
    <title> <?php echo $title;; ?></title>
</head>
<body>
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<div id="nav">
    <ul>
        <li><a href="<?php echo HOST;?>/admin/category">Категории</a></li>
        <li><a href="<?php echo HOST;?>/admin/subcategory">Подкатегории</a></li>
        <li><a href="<?php echo HOST;?>/admin/goods">Товары</a></li>
        <li><a href="<?php echo HOST;?>/admin/sale">Заказы</a></li>
    </ul>
    <span id = small_cart><a href='<?php echo HOST;?>/admin/login/logout'>Выйти</a><br></span>
</div>
<div id="wrap">
    <div id="main">
        <?php include 'application/admin/views/' . $contentView; ?>


    </div>
    <div id="sidebar">

        <ul>
            <?php include 'application/admin/views/' . $column; ?>

        </ul>
    </div>
</div>
<div id="footer">
    <p>Нижний колонтитул</p>
</div>
<script src="../../../js/jquery-2.1.3.js" type="text/javascript"></script>
<script src="../../../js/jquery.form.js" type="text/javascript"></script>
<script src="../../../js/script.js" type="text/javascript"></script>


</body>
</html>