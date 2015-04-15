<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../../css/style.css" rel="stylesheet">



    <title> <?php echo $title;; ?></title>
</head>
<body>
<div id="nav">

    <?php include 'application/views/' . $menu; ?>


</div>
<div id="wrapmain">
    <div id="mainmain">
        <?php include 'application/views/' . $contentView; ?>
        </div>
</div>

<div id="footer">
    <p>Kshop магазин современных кальянов</p>


</div>
<script src="../../js/jquery-2.1.3.js" type="text/javascript"></script>
<script src="../../js/jquery.cookie.js" type="text/javascript"></script>
<script src="../../js/scrolly.js" type="text/javascript"></script>


</body>
</html>