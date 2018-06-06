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
      $("#Menu").load("index.php #top-block"); 
	  $("#Sidebar").load("index.php #sidebar")
    });
    </script> 
</head>
<body>
<div id="Menu"></div>
<div style="font-size: 12px;" class="main-content">
<h3 style="font-size:22px; color:red;">Регистрация аккаунта</h3>
<p>Логин: <input type="text" name="login"></p>
<p>Пароль: <input type="password" name="password"></p>
<p>Email: <input type="text" name="login"></p>
<p style="color: gray; font-size: 10px;">На него будет отправлено письмо для подтверждения вашего Email адреса. Сообщение приходит в течении 10 минут</p>
<p>Возраст: <input type="numbers" name="login"></p>
<p>Пол:</p>
<p><input type="radio" value="1" name="pol">Мужской<input type="radio" name="pol" value="Женский">Женский</p>
</div>
<div id="Sidebar"></div>
</body>
</html>