<?php
$db = @mysqli_connect('127.0.0.1', 'root', 'root', 'gb') or die('Ошибка соединения с базой данных');
mysqli_set_charset($db, "utf8") or die('Кодировка не установлена!'); 