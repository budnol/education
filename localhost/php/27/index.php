<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

//copy — Копирует файл

	// copy('text.txt', 'folder/file.txt');

//file_exists — Проверяет существование указанного файла или каталога

	/*if(file_exists('folder/file.txt')) echo 'Файл существует!';
	else echo 'Такого файла нет!';*/

//file_get_contents — Читает содержимое файла в строку
	// echo nl2br($file = file_get_contents('folder/file.txt'));
	// echo $file = file_get_contents('https://google.com');

//file_put_contents — Пишет данные в файл

	/*$file = file_get_contents('https://php.net');
	$file2 = file_get_contents('https://php.net');
	file_put_contents('folder/file.txt', $file, FILE_APPEND);
	file_put_contents('folder/file.txt', $file2, FILE_APPEND);*/

//file — Читает содержимое файла и помещает его в массив

	/*$file = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	echo '<pre>';
	print_r($file);
	echo '</pre>';*/

//is_dir — Определяет, является ли имя файла директорией

	/*if(is_dir('folder')) echo 'Папка существует!';
	else echo 'Такой папки нет!';*/

//is_file — Определяет, является ли файл обычным файлом

	/*if(is_file('text.txt')) echo 'Это файл!';
	else echo 'Это не файл!';*/

//rename — Переименовывает файл или директорию

	// rename('text.txt', 'folder/file2.txt');

//mkdir — Создаёт директорию

	// mkdir('1/2/3', 0777, true);

//rmdir — Удаляет директорию

	// mkdir(1);
	// rmdir('1');

//touch — Устанавливает время доступа и модификации файла

	// touch('folder', time()-3600*24);

//unlink — Удаляет файл

	// unlink('folder/file.txt');

