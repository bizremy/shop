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
    <div id="wrap">
	<div id="main">
	  <?php include 'application/views/' . $contentView; ?>
	

	</div>
	<div id="sidebar">

		<ul>
            <?php include 'application/views/' . $column; ?>

		</ul>
	</div>	
</div>
<div id="footer">
		<p>Kshop магазин современных кальянов</p>


	</div>
      <script src="../../js/jquery-2.1.3.js" type="text/javascript"></script>
      <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
      <script src="../../js/script.js" type="text/javascript"></script>
   
</body>
</html>