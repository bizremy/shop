<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link href="../../css/style.css" rel="stylesheet">
         <title> <?php echo $title;; ?></title>
</head>
<body>
	<div id="nav">
		<ul>
            <?php include 'application/views/' . $menu; ?>
		</ul>
		
	</div>
    <div id="wrap">
	<div id="main">
	  <?php include 'application/views/' . $contentView; ?>
	

	</div>
	<div id="sidebar">
        <h1>боковое меню</h1>
		<ul>
            <?php include 'application/views/' . $column; ?>

		</ul>
	</div>	
</div>
<div id="footer">
		<p>Нижний колонтитул</p>
	</div>
      <script src="../../js/jquery-2.1.3.js" type="text/javascript"></script>
      <script src="../../js/script.js" type="text/javascript"></script>
   
</body>
</html>