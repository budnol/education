<?php

error_reporting(-1);
header("Content-type: text/html; charset=utf-8");

	 //mkdir('guests');

if(!empty($_POST['name']) && !empty($_POST['text'])){

	file_put_contents('guests/client.txt', $_POST['name'] . ' - ', FILE_APPEND);
	file_put_contents('guests/client.txt', $_POST['text'] . ' - ', FILE_APPEND);
	file_put_contents('guests/client.txt', date('Y-m-d H:i:s') . ' | ', FILE_APPEND);
	$file = explode( ' | ', file_get_contents('guests/client.txt') );
	echo $str = implode('<br>', $file);
}
?>

<form method="post" action="">
	<input type="text" name="name" placeholder="Введите имя"><br />
	<textarea name="text" placeholder="Укажите город"></textarea><br />
	<input type="submit" value="Отправить">
</form>