<?php error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

//explode — Разбивает строку с помощью разделителя
	
	/*$str = 'Иванов Иван Иванович';
	$data = explode(' ', $str, 2);

	print_r($data);
	//echo $data[0];*/

//implode — Объединяет элементы массива в строку

	/*$data = ['Иванов', 'Иван', 'Иванович'];
	$str = implode(', ', $data); // join бывает вместо implode;
	var_dump($str);*/

//trim — Удаляет пробелы (или другие символы) из начала и конца строки. rtrim - справа, ltrim - слева.

	/*$str = "\n     <p>Hello</p>\n";
	$str .= "\n<p>world!</p>     \t\n";
	// echo $str;
	echo trim($str, "\t");*/

	/*$str = '.....test,';
	echo trim($str, ',');*/

//md5 — Возвращает MD5-хеш строки. Использовать md5 и sha1 на данный момент не безопасно!

	/*$str = 'password';
	echo md5($str);*/ 

//nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки

	/*$str = "Hello\nworld!\n";
	//echo $str;
	echo nl2br($str);*/

//str_replace — Заменяет все вхождения строки поиска на строку замены. str-ireplace - работает без учета регистра.

	/*$str = '[i]Привет[/i]! Меня зовут [b]Вася[/b]!';
	// $str = str_replace('[b]', '<b>', $str);
	// $str = str_replace('[/b]', '</b>', $str);

	$search = ['[b]', '[/b]', '[i]', '[/i]'];
	$replace = ['<b>', '</b>', '<i>', '</i>'];
	//$str = str_replace($search, $replace, $str);
	$str = str_ireplace($search, $replace, $str);
	echo $str;*/

//strip_tags — Удаляет теги HTML и PHP из строки

	/*$str = '<i>Привет</i>! Меня зовут <b>Вася</b>!';
	echo strip_tags($str, '<b>');*/

//strlen — Возвращает длину строки. Байты а не символы! При мультибайтной кодировки.

	/*//$str = 'Hello';
	$str = 'Привет';
	echo strlen($str);*/

//mb_strlen — Получает длину строки. Но уже при кодировке utf-8, когда кирилица ест два байта на символ.

	/*$str = 'Привет';
	echo mb_strlen($str, 'utf-8');*/

//mb_strpos — Поиск позиции первого вхождения одной строки в другую.
// Если мы ищем первую букву, то мы получим ноль, который приводится к false.

	/*$str = 'Привет, мир!';
	//echo mb_strpos($str, 'и', 0, 'utf-8');
	if( mb_strpos($str, 'П', 0, 'utf-8') !== false) echo 'OK'; // Строгое сравнение, т.е. ноль не равно фолс
	else echo 'NO';*/

//mb_strtolower — Приведение строки к нижнему регистру
//mb_strtoupper — Приведение строки к верхнему регистру

	/*$str = 'привет, мир!';
	$str2 = 'ПРИВЕТ, МИР!';

	echo mb_strtoupper($str, 'utf-8');
	echo mb_strtolower($str2, 'utf-8');*/

//mb_substr — Возвращает часть строки

	/*$str = 'привет, мир!';
	//echo mb_substr($str, 0, 6, 'utf-8');
	echo mb_substr($str, -4, 3, 'utf-8');*/

//htmlspecialchars — Преобразует специальные символы в HTML-сущности

	/*$str = '&amp;<h1>[i]Привет[/i]! Меня зовут [b]Вася[/b]!</h1><iframe src = "http://webformyself.com" height="100%" width="100%"></iframe><script>alert(\' XSS\')</script>';
	echo htmlspecialchars($str, ENT_QUOTES, 'utf-8', false);*/

//htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы

	/*$str = '
		&amp;&lt;h1&gt;[i]Привет[/i]! Меня зовут [b]Вася[/b]!&lt;/h1&gt;&lt;iframe src = &quot;http://webformyself.com&quot; height=&quot;100%&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;script&gt;alert(&#039; XSS&#039;)&lt;/script&gt;gt;';
	echo htmlspecialchars_decode($str);*/

//htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности. Аналог предыдущей.