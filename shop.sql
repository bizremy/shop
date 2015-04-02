-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 26 2015 г., 18:27
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Кальяны'),
(2, 'Аксессуары'),
(4, 'Електронные синареты'),
(6, 'Еще');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `main` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `main`, `description`, `price`, `id_subcategory`, `img_url`) VALUES
(1, 'Кальян Хамунаби', 'Самый маленький кальян от фирмы "Хабиби". Лучшее что можно найти за такие деньги. В комплекте глубокая чаша для кальяна, это позволит долго наслаждаться кальяном и не перезабивать его. Шахта кальяна деревянная, шланг моющийся. Кальян упакован в цветную кр', 'Цвет зеленый', 40, 1, 'uploads/9jRwZokCjM8.jpg'),
(2, 'Кальян Бахраме', 'Представляем Вашему вниманию подборку наиболее известных дизайнерских кальянов - от всемирно изестной Медузы до малоизвестных брендов.', 'Цвет Синий', 50, 2, 'uploads/shapes2.jpg'),
(3, 'Кальян Альфахер', 'Самый маленький кальян от фирмы "Хабиби". Лучшее что можно найти за такие деньги. В комплекте глубокая чаша для кальяна, это позволит долго наслаждаться кальяном и не перезабивать его. Шахта кальяна деревянная, шланг моющийся. Кальян упакован в цветную кр', '<p>Высота47 см</p><p>Гарантия6 мес.</p><p>КомплектацияТрубка, чаша, колба, шахта, уплотнители, блюдце, щипци для угля, кейс.</p><p>Материалметалл</p><p>Длинна трубки1,2 м.</p><p>Объем колбы0,6 л.</p><p>Материал колбыстекло</p><p>Тип соединениясоставной</p><p>УпаковкаКейс</p><p>ЧашаВнешняя</p><p>&nbsp;</p><p>&nbsp;</p><p>Очень хороший кальян от производителя Habibi. Кальян имеет оптимальную высоту, что дает хорошую устойчивость и превосходное охлаждение дыма. Все детали выполнены на высшем уровне, эти кальяны могут Вам прослужить не один год. Так же уникальность этого кальяна в узоре на шахте в виде головы оленя. Смотрится очень интересно и вызывающе. Замечательный подарок.</p><p>&nbsp;</p><p>Приобритая эту модель Вы&nbsp;получаете полностью укомплектованный кальян вместе с щипцами и&nbsp;<strong>гарантию&nbsp;</strong>в&nbsp;течении<strong>&nbsp;6 мес</strong>. Покупая кальян у&nbsp;нас Вы&nbsp;можете&nbsp;<strong>сэкономить 40%&nbsp;</strong>при покупке 1 аксессуара, стоимостью до&nbsp;60 грн., а&nbsp;так&nbsp;же гарантированно и&nbsp;бесплатно получить<strong>&nbsp;2 подарка</strong>&nbsp;из&nbsp;следующего списка:&nbsp;</p><p>&nbsp;</p><p>&mdash;&nbsp;Уголь Viva быстровозгорающийся<br />&mdash;&nbsp;Уголь кокосовый CocoShisha<br />&mdash;&nbsp;Многоразовая сеточка для угля<br />&mdash;&nbsp;Фольга<br />&mdash;&nbsp;Ерш для колбы<br />&mdash;&nbsp;Ерш для шахты<br />&mdash;&nbsp;Многоразовый фильтр<br />&mdash;&nbsp;Охлаждающие шарики</p>', 40, 1, 'uploads/9jRwZokCjM8.jpg'),
(6, 'Бомжаме', 'Представляем Вашему вниманию подборку наиболее известных дизайнерских кальянов - от всемирно изестной Медузы до малоизвестных брендов.', '<p>Высота47 см</p><p>Гарантия6 мес.</p><p>КомплектацияТрубка, чаша, колба, шахта, уплотнители, блюдце, щипци для угля, кейс.</p><p>Материалметалл</p><p>Длинна трубки1,2 м.</p><p>Объем колбы0,6 л.</p><p>Материал колбыстекло</p><p>Тип соединениясоставной</p><p>УпаковкаКейс</p><p>ЧашаВнешняя</p><p>&nbsp;</p><p>&nbsp;</p><p>Очень хороший кальян от производителя Habibi. Кальян имеет оптимальную высоту, что дает хорошую устойчивость и превосходное охлаждение дыма. Все детали выполнены на высшем уровне, эти кальяны могут Вам прослужить не один год. Так же уникальность этого кальяна в узоре на шахте в виде головы оленя. Смотрится очень интересно и вызывающе. Замечательный подарок.</p><p>&nbsp;</p><p>Приобритая эту модель Вы&nbsp;получаете полностью укомплектованный кальян вместе с щипцами и&nbsp;<strong>гарантию&nbsp;</strong>в&nbsp;течении<strong>&nbsp;6 мес</strong>. Покупая кальян у&nbsp;нас Вы&nbsp;можете&nbsp;<strong>сэкономить 40%&nbsp;</strong>при покупке 1 аксессуара, стоимостью до&nbsp;60 грн., а&nbsp;так&nbsp;же гарантированно и&nbsp;бесплатно получить<strong>&nbsp;2 подарка</strong>&nbsp;из&nbsp;следующего списка:&nbsp;</p><p>&nbsp;</p><p>&mdash;&nbsp;Уголь Viva быстровозгорающийся<br />&mdash;&nbsp;Уголь кокосовый CocoShisha<br />&mdash;&nbsp;Многоразовая сеточка для угля<br />&mdash;&nbsp;Фольга<br />&mdash;&nbsp;Ерш для колбы<br />&mdash;&nbsp;Ерш для шахты<br />&mdash;&nbsp;Многоразовый фильтр<br />&mdash;&nbsp;Охлаждающие шарики</p>', 22, 1, 'uploads/shapes2.jpg'),
(26, 'Новая Катка', 'Самый маленький кальян от фирмы "Хабиби". Лучшее что можно найти за такие деньги. В комплекте глубокая чаша для кальяна, это позволит долго наслаждаться кальяном и не перезабивать его. Шахта кальяна деревянная, шланг моющийся. Кальян упакован в цветную кр', '<h3><strong>Кальян Медуза (Meduse design)</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Чехия<br />\r\n<strong>Сайт:</strong>&nbsp;www.medusedesign.com<br />\r\n<strong>Особенности:</strong>&nbsp;Уникальный кальян, первооткрыватель среди дизайнерских кальянов. Популярен и известен во всем мире. Имеется несколько разных линеек кальянов. Все колбы изготовлены из богемского стекла мастерами-стеклодувами, использующими традиционную чешскую технику выдувания изделий. Изготовлены из боросиликатного стекла, характеризующегося высокой термостойкостью и химической устойчивостью. Часто встречаются подделки по более дешевой цене, будьте осторожны.<br />\r\n<strong>Цена:</strong>&nbsp;от 85000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/shapes.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян Shapes</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Россия<br />\r\n<strong>Сайт:</strong>&nbsp;www.art-of-shapes.ru и www.shapespipes.com.<br />\r\n<strong>Особенности:</strong>&nbsp;Интересная российская разработка, чаще других встерчается в кафе и ресторанах. Кальян сделан из нержавеющей стали, есть подстветка. Встречаются украинские подделки. Подробная статья об этом кальяне -<a href="http://kalyan-expert.ru/shapes.html">Подробнее.</a><br />\r\n<strong>Цена:</strong>&nbsp;12000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/egeglas.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян</strong>&nbsp;<strong>Egeglas</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Германия<br />\r\n<strong>Сайт:</strong>&nbsp;www.egeglas.de<br />\r\n<strong>Особенности:&nbsp;</strong>Современный стеклянный кальян из Германии, обладающий хорошим курительными свойствами. Сделан полностью из боросиликатного стекла - в кальяне нет ни одного металлического элемента. Возможны проблемы с покупкой в связи с ограниченным производством.<br />\r\n<strong>Цена:</strong>&nbsp;от 13000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/litepro.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян LitePro</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Россия<br />\r\n<strong>Сайт:</strong>&nbsp;http://litepro.biz<br />\r\n<strong>Особенности:</strong>&nbsp;Российский кальян из стекла. Наиболее популярна модель Temple 45. Возможны подделки.<br />\r\n<strong>Цена:</strong>&nbsp;11000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/fumo.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян Fumo</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;США (?)<br />\r\n<strong>Сайт:</strong>&nbsp;www.fumodesign.com<br />\r\n<strong>Особенности:</strong>&nbsp;Простые, но изящные кальяны из стекла. Пользуются популярностью в США.<br />\r\n<strong>Цена:</strong>&nbsp;от 10000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/airone.jpg" style="height:250px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян AirOne</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Россия<br />\r\n<strong>Сайт:</strong>&nbsp;http://nargilia.ru<br />\r\n<strong>Особенности:</strong>&nbsp;Кальян от компании Nargilia. Ставится только в заведениях-партнерах Nargilia, где работают кальянщики компании.&nbsp;<br />\r\n<strong>Цена:</strong>&nbsp;Не продается, но цена около 14000 рублей.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/cwp.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян CWP (</strong><strong>Custom Water Pipes)</strong></h3>\r\n\r\n<p><strong>Производитель:&nbsp;</strong>Россия<br />\r\n<strong>Сайт:</strong>&nbsp;http://customwaterpipes.ru<br />\r\n<strong>Особенности:</strong>&nbsp;Высота кальяна 30см, он выполнен из термостойкого боросиликатного стекла, силикона и стали. Используются чаще всего в дорогих ресторанах.<br />\r\n<strong>Цена:</strong>&nbsp;14000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/airdiem.jpg" style="height:250px; margin:0px; width:650px" /></p>\r\n', 100, 1, 'uploads/9jRwZokCjM8.jpg'),
(31, 'Кальян Медуза', 'Представляем Вашему вниманию подборку наиболее известных дизайнерских кальянов - от всемирно изестной Медузы до малоизвестных брендов.', '<p>Cреди огромного разнообразия видов кальянов следует обязательно отметить кальяны нового поколения &mdash; Медуза и Шейпс. Обе модели кальяна, хоть и похожи между собой, но производятся двумя различными фирмами, однако из-за внешней схожести и похожего принципа работы мы их рассмотрим в этой статье вместею</p><p>Meduse &mdash; великолепный кальян поистине напоминает медузу на трёх щупальцах.</p><p>Изготовлен он чешскими мастерами-стеклодувами, славящимися на весь мир. Они взяли всё самое лучшее из кальянных традиций и создали это произведение искусства. Оригинальная форма колбы, материалы высочайшего качества и профессионализм дизайнеров позволяют назвать этот кальян эксклюзивным.</p><p>Кальян Медуза &mdash; новая разновидность кальяна</p><p><br />Все стеклянные детали кальяна Медуза (Shapes) изготовлены исключительно из настоящего богемского стекла. Сегодня богемское стекло &mdash; самое лучшее в мире. Чешские стеклодувы изготавливают его по древним традициям. Сделанное по особой технологии, стекло проходит контроль качества на прочность и прозрачность.</p><p>Также отличились и лучшие чешские кузнецы: они вручную, используя только молоток и наковальню, выковали металлические части этого уникального кальяна.</p><p>Принцип работы такой же, как и у других кальянов, а вот технические характеристики дают более насыщенный и чистый дым. Кальян Медуза лёгок в приготовлении и обращении.</p><p>Совершенно прозрачная колба позволяет залить жидкость абсолютно любого цвета. Можно сделать красочный коктейль с добавлением кусочков льда, фруктов, ягод и полюбоваться на невообразимую игру цветов.</p>', 500, 1, 'uploads/shapes2.jpg'),
(32, 'Кальян Медуза XXL', 'Самый маленький кальян от фирмы "Хабиби". Лучшее что можно найти за такие деньги. В комплекте глубокая чаша для кальяна, это позволит долго наслаждаться кальяном и не перезабивать его. Шахта кальяна деревянная, шланг моющийся. Кальян упакован в цветную кр', '<p>Высота47 см</p><p>Гарантия6 мес.</p><p>КомплектацияТрубка, чаша, колба, шахта, уплотнители, блюдце, щипци для угля, кейс.</p><p>Материалметалл</p><p>Длинна трубки1,2 м.</p><p>Объем колбы0,6 л.</p><p>Материал колбыстекло</p><p>Тип соединениясоставной</p><p>УпаковкаКейс</p><p>ЧашаВнешняя</p><p>&nbsp;</p><p>&nbsp;</p><p>Очень хороший кальян от производителя Habibi. Кальян имеет оптимальную высоту, что дает хорошую устойчивость и превосходное охлаждение дыма. Все детали выполнены на высшем уровне, эти кальяны могут Вам прослужить не один год. Так же уникальность этого кальяна в узоре на шахте в виде головы оленя. Смотрится очень интересно и вызывающе. Замечательный подарок.</p><p>&nbsp;</p><p>Приобритая эту модель Вы&nbsp;получаете полностью укомплектованный кальян вместе с щипцами и&nbsp;<strong>гарантию&nbsp;</strong>в&nbsp;течении<strong>&nbsp;6 мес</strong>. Покупая кальян у&nbsp;нас Вы&nbsp;можете&nbsp;<strong>сэкономить 40%&nbsp;</strong>при покупке 1 аксессуара, стоимостью до&nbsp;60 грн., а&nbsp;так&nbsp;же гарантированно и&nbsp;бесплатно получить<strong>&nbsp;2 подарка</strong>&nbsp;из&nbsp;следующего списка:&nbsp;</p><p>&nbsp;</p><p>&mdash;&nbsp;Уголь Viva быстровозгорающийся<br />&mdash;&nbsp;Уголь кокосовый CocoShisha<br />&mdash;&nbsp;Многоразовая сеточка для угля<br />&mdash;&nbsp;Фольга<br />&mdash;&nbsp;Ерш для колбы<br />&mdash;&nbsp;Ерш для шахты<br />&mdash;&nbsp;Многоразовый фильтр<br />&mdash;&nbsp;Охлаждающие шарики</p>', 500, 1, 'uploads/9jRwZokCjM8.jpg'),
(33, 'MedusaDesign', 'Представляем Вашему вниманию подборку наиболее известных дизайнерских кальянов - от всемирно изестной Медузы до малоизвестных брендов.', '<h3><strong>Кальян Медуза (Meduse design)</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Чехия<br />\r\n<strong>Сайт:</strong>&nbsp;www.medusedesign.com<br />\r\n<strong>Особенности:</strong>&nbsp;Уникальный кальян, первооткрыватель среди дизайнерских кальянов. Популярен и известен во всем мире. Имеется несколько разных линеек кальянов. Все колбы изготовлены из богемского стекла мастерами-стеклодувами, использующими традиционную чешскую технику выдувания изделий. Изготовлены из боросиликатного стекла, характеризующегося высокой термостойкостью и химической устойчивостью. Часто встречаются подделки по более дешевой цене, будьте осторожны.<br />\r\n<strong>Цена:</strong>&nbsp;от 85000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/shapes.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян Shapes</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Россия<br />\r\n<strong>Сайт:</strong>&nbsp;www.art-of-shapes.ru и www.shapespipes.com.<br />\r\n<strong>Особенности:</strong>&nbsp;Интересная российская разработка, чаще других встерчается в кафе и ресторанах. Кальян сделан из нержавеющей стали, есть подстветка. Встречаются украинские подделки. Подробная статья об этом кальяне -<a href="http://kalyan-expert.ru/shapes.html">Подробнее.</a><br />\r\n<strong>Цена:</strong>&nbsp;12000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/egeglas.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян</strong>&nbsp;<strong>Egeglas</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Германия<br />\r\n<strong>Сайт:</strong>&nbsp;www.egeglas.de<br />\r\n<strong>Особенности:&nbsp;</strong>Современный стеклянный кальян из Германии, обладающий хорошим курительными свойствами. Сделан полностью из боросиликатного стекла - в кальяне нет ни одного металлического элемента. Возможны проблемы с покупкой в связи с ограниченным производством.<br />\r\n<strong>Цена:</strong>&nbsp;от 13000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/litepro.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян LitePro</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Россия<br />\r\n<strong>Сайт:</strong>&nbsp;http://litepro.biz<br />\r\n<strong>Особенности:</strong>&nbsp;Российский кальян из стекла. Наиболее популярна модель Temple 45. Возможны подделки.<br />\r\n<strong>Цена:</strong>&nbsp;11000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/fumo.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян Fumo</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;США (?)<br />\r\n<strong>Сайт:</strong>&nbsp;www.fumodesign.com<br />\r\n<strong>Особенности:</strong>&nbsp;Простые, но изящные кальяны из стекла. Пользуются популярностью в США.<br />\r\n<strong>Цена:</strong>&nbsp;от 10000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/airone.jpg" style="height:250px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян AirOne</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Россия<br />\r\n<strong>Сайт:</strong>&nbsp;http://nargilia.ru<br />\r\n<strong>Особенности:</strong>&nbsp;Кальян от компании Nargilia. Ставится только в заведениях-партнерах Nargilia, где работают кальянщики компании.&nbsp;<br />\r\n<strong>Цена:</strong>&nbsp;Не продается, но цена около 14000 рублей.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/cwp.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<h3><strong>Кальян CWP (</strong><strong>Custom Water Pipes)</strong></h3>\r\n\r\n<p><strong>Производитель:&nbsp;</strong>Россия<br />\r\n<strong>Сайт:</strong>&nbsp;http://customwaterpipes.ru<br />\r\n<strong>Особенности:</strong>&nbsp;Высота кальяна 30см, он выполнен из термостойкого боросиликатного стекла, силикона и стали. Используются чаще всего в дорогих ресторанах.<br />\r\n<strong>Цена:</strong>&nbsp;14000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/airdiem.jpg" style="height:250px; margin:0px; width:650px" /></p>\r\n', 500, 1, 'uploads/9jRwZokCjM8.jpg'),
(34, 'Кальян Медуза New', 'Представляем Вашему вниманию подборку наиболее известных дизайнерских кальянов - от всемирно изестной Медузы до малоизвестных брендов.', '<h1>Обзор дизайнерских кальянов</h1>\r\n\r\n<p>Представляем Вашему вниманию&nbsp;<strong>подборку наиболее известных дизайнерских кальянов</strong>&nbsp;- от всемирно изестной<strong>Медузы</strong>&nbsp;до малоизвестных брендов. Если у Вас есть, чем дополнить данный обзор - пишите в форме комментариев внизу страницы или в нашей группе Вконтакте.</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/meduse.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Кальян Медуза (Meduse design)</strong></h3>\r\n\r\n<p><strong>Производитель:</strong>&nbsp;Чехия<br />\r\n<strong>Сайт:</strong>&nbsp;www.medusedesign.com<br />\r\n<strong>Особенности:</strong>&nbsp;Уникальный кальян, первооткрыватель среди дизайнерских кальянов. Популярен и известен во всем мире. Имеется несколько разных линеек кальянов. Все колбы изготовлены из богемского стекла мастерами-стеклодувами, использующими традиционную чешскую технику выдувания изделий. Изготовлены из боросиликатного стекла, характеризующегося высокой термостойкостью и химической устойчивостью. Часто встречаются подделки по более дешевой цене, будьте осторожны.<br />\r\n<strong>Цена:</strong>&nbsp;от 85000 рублей</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://kalyan-expert.ru/images/interesting/DesignHookahs/shapes.jpg" style="height:270px; margin:0px; width:650px" /></p>\r\n', 500, 3, 'uploads/kalyan-meduse.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_goods` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `ord_date` varchar(20) NOT NULL,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_goods`, `quantity`, `ord_date`, `info`) VALUES
(1, 1, 20, '0000-00-00', 'Новый товар'),
(2, 1, 20, '0000-00-00', 'Новый товар'),
(3, 2, 10, '0000-00-00', 'поддробно'),
(4, 2, 10, '0000-00-00', 'поддробно'),
(5, 1, 20, '0000-00-00', '50055'),
(6, 3, 40, '0000-00-00', 'Новый'),
(7, 2, 20, '0000-00-00', 'ceweeaaaa'),
(8, 30, 50, '2015-03-13 12:28:57', 'XXXXX'),
(9, 1, 50, '2015-03-13 13:51', '4000');

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_goods` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `id_seller` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`id`, `id_goods`, `quantity`, `price`, `id_seller`) VALUES
(39, 10, 12, 12, 68),
(40, 10, 12, 12, 69),
(41, 1, 1, 40, 70),
(42, 3, 1, 40, 70),
(43, 6, 1, 22, 70),
(44, 1, 1, 40, 71),
(45, 3, 1, 40, 71),
(46, 6, 1, 22, 71),
(47, 1, 2, 40, 72),
(48, 3, 2, 40, 72),
(49, 1, 4, 40, 73),
(50, 3, 2, 40, 73),
(51, 1, 1, 40, 74),
(52, 3, 1, 40, 74),
(53, 6, 1, 22, 74),
(54, 1, 1, 40, 75),
(55, 2, 2, 50, 75),
(56, 3, 2, 40, 75),
(57, 1, 1, 40, 76),
(58, 2, 1, 50, 76),
(59, 3, 1, 40, 76);

-- --------------------------------------------------------

--
-- Структура таблицы `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `sum` float NOT NULL,
  `coment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Дамп данных таблицы `seller`
--

INSERT INTO `seller` (`id`, `name`, `address`, `phone`, `email`, `date`, `sum`, `coment`) VALUES
(60, 'Гурко Роман', 'фыыфыф', '0936931744', '65454545', '2015-03-23 20:15', 364, 'фыфыыфыфыфы'),
(61, 'Роман', 'фввффв', 'ыфыфыфы', 'фыфыф', '2015-03-23 20:17', 364, 'ффвыфвффвы'),
(62, '211221', '121212', '211212', '12121212', '2015-03-23 20:17', 364, '1212122112'),
(63, 'фвыфывфвы', 'фвыфвыфвы', 'фвыфвыыфв', 'фвыфвывыф', '2015-03-23 20:17', 120, 'фвывфывфыфвы'),
(64, 'фвывыфвы', 'вффввф', 'фвфвфв', 'фвфвфв', '2015-03-23 20:18', 120, 'вффвыфывы'),
(65, 'assasa', 'sasas', 'sasasa', 'sasasasa', '2015-03-23 20:27', 240, 'sasaasasas'),
(66, 'asasd', 'adads', 'adsdds', 'adsadsads', '2015-03-23 20:28', 120, 'addsasa'),
(67, 'dadsads', 'sadada', 'dasadas', 'dadsad', '2015-03-23 20:29', 182, 'adasdads'),
(68, 'dsaads', 'daadsdas', 'dsadaads', 'dasadasd', '2015-03-23 20:36', 12, 'adadsasd'),
(69, 'zzzzzzz', 'dadsaa', 'zadsdas', 'adssad', '2015-03-23 20:36', 12, 'zzz'),
(70, 'zzzzzzppppp', 'xcvxvvx', 'assss', 'xxxxxx', '2015-03-23 20:41', 102, 'xccxvvxvxc'),
(71, 'hjjj', 'kkkkkkkkkk', 'hkkkkk', 'kkkkkkkk', '2015-03-23 20:42', 102, 'k02'),
(72, 'assaassasa', 'saas', 'sasasa', 'sasasa', '2015-03-23 20:44', 160, 'assasaas'),
(73, 'assaaa', 'assasa', 'assasa', 'assasa', '2015-03-23 20:45', 240, 'assasasa'),
(74, 'assaaa', 'assasa', 'assasasa', 'assasa', '2015-03-23 20:47', 102, 'assasa'),
(75, 'Роман', 'Янгеля 5', '0936931744', 'roman@gmail.com', '2015-03-26 00:13', 220, 'новы комент'),
(76, 'qqqw', 'qwqwwq', 'wqwq', 'qwwqwq', '2015-03-26 00:44', 130, 'qwwqwqwq');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `subcategory`
--

INSERT INTO `subcategory` (`id`, `title`, `id_category`) VALUES
(1, 'Сирийские', 1),
(2, 'Египетскии', 1),
(3, 'Индонезия', 1),
(4, 'Чаши', 2),
(5, 'Муштуки', 2),
(6, 'Фишки', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
