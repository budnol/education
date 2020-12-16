<?php
require_once 'classes/File.php';

$file = new File( __DIR__ . '/file1.txt');
$file->write('Строка 1');
$file->write('Строка 2');
$file->write('Строка 3');
$file->write('Строка 4');
$file->write('Строка 5');
$file->write('Строка 6');
$file->write('Зайка, привет!');