<?php

// Оператор приведения к NULL

	// echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';
	// echo $user = $_GET['user'] ?? $_GET['user2'] ?? 'guest';

// Оператор spaceship

	/*$a = 5;
	$b = 2;

	// echo $a <=> $b;

	if(( $a <=> $b ) === 1){
		echo "$a > $b";
	}elseif(( $a <=> $b ) === 0){
		echo "$a = $b"; 
	}else{
		echo "$a < $b";
	}*/

// Задание константы массивов

	/*define ('DBHOST', 'localhost');
	define ('DBUSER', 'login');
	define ('DBPASS', 'password');
	define ('DBBASE', 'database');

	define('DB', [
		'localhost',
		'login',
		'password',
		'database',
	]);

	define('DB', [
		'DBHOST' => 'localhost',
		'DBUSER' => 'login',
		'DBPASS' => 'password',
		'DBBASE' => 'database',
	]);

	echo '<pre>';
	print_r(DB);
	echo '<pre>';

	echo DB['DBUSER'];*/

//	Декларация скалярных типов

	/*declare(strict_types = 1);

	function sum(int...$ints){
		return array_sum($ints);
	}
		var_dump( sum(2,3,5) );*/

//	Декларация возвращаемых значений.

	/*function sum($a, $b) : float{
		return $a + $b;
	}

	var_dump( sum(2, 3) );*/

// Функция целочисленного деления

	var_dump(intdiv(10, 3));