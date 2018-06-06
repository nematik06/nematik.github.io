<?php
// Комментарий Тестовая среда для разработки PHP кодов
error_reporting(-1);
define("BB_ROOT", "./");
require(BB_ROOT . "language.php");

/* Тип Комментирования 
Многострочный
PHP */

?>
<!-- Комментарий в HTML -->
<!DOCTYPE html>
<html language="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" href="main.css" type="text/css"> 
<script src="main.css" type="text/css"></script> 
<title><?php echo $title; ?></title>
<style type="text/css">
</style>
</head>
<body class="homepage">
<div id="logo" align="left">
<img  class="logo" onclick="index.php" src="/logo.png"/>
</div>
<header>
<div id="top-block">
<!--Код Меню-->
<ul class="main-menu" id="navbar">
<li><a href="/index.php"> Главная</a> 
<ul>
<li><a href="#">1 подменю</a></li>
<li><a href="#">2 подменю</a></li>
<li><a href="#">3 подменю</a></li>

</ul>
</li>
<li><a href="#"> Портфолио</a></li>
<li><a href="#">О нас</a></li>
<li><a target="_blank" href="test.php">Тест</a></li>
<li><a target="_blank" href="contact.php"> Контакты</a></li>
<!--Дата и Время-->
<span align="right" class="menu-date">Дата: <?php echo date('l, F jS Y'); ?>  Время: <?php echo date('G:i:s'); ?></span>
</ul>
<!--Банер Сайта-->
<div id="banner"></div>

<div class="main-menu" id="navbar2"> 
<form action="index.php" class="search" method="get">
<input type="text" name="search">
<select name="search-place" id="search-action">
<option value="1" selected="selected">Google</option>
<option value="2">Site</option>
<option value="3">Other</option>
</select>
<input type="submit" value="Search">
</form>
</div>
</div>
</header>
<div class="main-content">
<!--Правая-Боковая-Панель-->
<div class="advertising">
<h3 style="color:red; text-align: center; padding-top: 40px;"> Реклама 800x100</h3>
</div>
<!--Главная страница тестирования-->
<h1 style="color:red;"><?php echo $info; ?></h1>
<p><b class="test"> Mr. Smith sell <?php echo $fruit; ?></b></p>
<p><b class="test"> 5 в 3 степени это <?php echo $test; ?></b></p>
<p class="test"> <?php 
// Вывод данных
 echo var_dump($new); ?> </p>
<br>
<?php 
//Тип Вывода бывает Echo или Print
echo FRUITS;
?>
</div>
<div id="sidebar" class="sidebar-right">
<!--Блок-Рекламы-->
<div class="sidebar-names">Реклама</div>
</div>
<div style="clear:both;"></div>
</body>
</html>
<!-- Конец Кода -->
