<?php define("BB_ROOT", "./");
require(BB_ROOT . "language.php");
?>
<body>
<html>
<head>
<title>Test page</title>
<script src="jquery.min.js"></script> 
<script>
$(document).ready(function() {
$('header').hide().slideDown(8000);
});
</script>

</head>
<header>
<div id="margarine" attribute="value">Margarine</div>
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
</header>
</html>
</body>
