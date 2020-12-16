<?php

error_reporting(-1);

//$this = '123'; Переменные которые нельзя назначать.

$var = 'pencil';
$is_auth = false;

/*
boolean: true / false
integer
float
string
*/

/* 
$var = false;
	echo $var;  true будет 1  false будет 0
	var_dump($var); смотрим что лежит в var
	echo gettype($var); функция выводит тип данных
*/

/*
$int = 10;
var_dump($int);
*/

/*
$fl = 1.2;
var_dump($fl);
*/

$var = 10;
$str = 'This is \'string\'. $var';

$str2 = "This is \"string\". $var";
//var_dump($str2);
//HEREDOC - при таком синтаксисе ничего не нужно экранировать. Это аналог двойных кавычек
//NOWDOC - это аналог одинарных кавычек

$str3 = <<<HERE
This is "string". $var
HERE;

$str4 = <<<'HERE'
This 'is' "string". $var
HERE;

echo $str4;


