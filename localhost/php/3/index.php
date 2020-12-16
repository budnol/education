<?php

error_reporting(-1);

$title = 'hello world!';
$title = 'page title!';
$винни_пух = "Hello I'm Winnie"; //Называть переменные кирилицей нельзя!
$fruit = 'apple';
$winnie_pooh = "Hello I'm Winnie. I have 2 {$fruit}s";
//$winnieThePooh = "Hello I'm Winnie";

$var = '123'; //Переменные регистрозависимые.
$Var = '456'; //Начинать переменную нужно с маленько буквы.

define("PAGE","new page"); //Рекомендованый способ объявления констант.
//define("PAGE","new page2"); //Константу нельзя перезаписать, как к примеру ту же переменную! Это удобно когда работают несколько программистов.

const PAGE2 = 'new const';// Вариант для ООП

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $title; ?></h1>
	<p><?php echo $винни_пух; ?></p>
	<p><?php echo $winnie_pooh; ?></p>
	<p><?php echo $Var; ?></p>
	<p><?php echo PAGE; ?></p> <!-- Константу нельзя заключать в кавычки при выводе в строке-->
	<p><?php echo PAGE2; ?></p>
</body>
</html>