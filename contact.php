<?php 
define("BB_ROOT", "./");
require(BB_ROOT . "language.php");
?>
<!DOCTYPE html>
<html language="ru">
<head>
<title>Контакты :: <?php echo SITENAME;?></title>
<link rel="stylesheet" href="main.css" type="text/css"> 
<script src="jquery.pack.js"></script> 
    <script> 
    $(function(){
      $("#Header").load("index.php header"); 
	  $("#Sidebar").load("index.php #sidebar")
    });
    </script> 
</head>
<body>
	<div id="logo" align="left">
<img  class="logo" onclick="index.php" src="/logo.png"/>
</div>
<div id="Header"></div>
<div class="main-content">
<fieldset><legend><h3 style="color:red; font-size: 22px;">Контактные данные:</h3></legend>
<p><b>Телеграм:</b> (+99890) 568-78-98</p>
<p><b>Контактный-номер:</b> (+99890) 568-78-98</p>
<p><b>Адрес:</b> г. Ташкент, улица Дяди Пети 12а</p>
<p><b>Email:</b> info@nemat.uz</p>
</fieldset>
<br>
<br>
<h3>Форма Обратной Связи</h3>
<fieldset>
<legend>Имя</legend>
<input type="text" name="name">
</fieldset>
<br>
<fieldset>
<legend>Телефон</legend>
<input type="text" name="phone" value="+998">
</fieldset>
<br>
<fieldset>
<legend>Email</legend>
<input type="text" name="mail">
</fieldset>
<br>
<fieldset>
<legend>Задайте вопрос</legend>
<textarea type="text" cols="100" rows="5" name="question"></textarea>
<input type="button" value="Отправить">
</fieldset>
</div>
<div id="Sidebar"></div>
</body>
</html>