<?php error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

//date — Форматирует вывод системной даты/времени

	//echo date('Y-m-d H:i:s');

//date_default_timezone_get — Возвращает временную зону, используемой по умолчанию всеми функциями даты/времени в скрипте

	/*echo date_default_timezone_get();
	echo '<br>';*/

//date_default_timezone_set — Устанавливает временную зону по умолчанию для всех функций даты/времени в скрипте

	/*date_default_timezone_set('Asia/Yekaterinburg');
	echo '<br>';
	echo date_default_timezone_get();*/

//time — Возвращает текущую метку системного времени Unix

	//date_default_timezone_set('UTC');
	//echo date('Y-m-d H:i:s', time() + 60*60*24*10);
	// echo time();

	//echo '2010 - ' . date('Y');

	//phpinfo();

//getdate — Возвращает информацию о дате/времени

	/*$date = getdate();
	echo '<pre>';
	print_r($date);
	echo '<pre>';
	echo '<br>';
	echo $date['year'];*/

//strtotime — Преобразует текстовое представление даты на английском языке в метку времени Unix

	//echo strtotime("+1 day");
	//echo date('Y-m-d H:i:s', strtotime("+1 day 1 hour"));

//mktime — Возвращает метку времени Unix для заданной даты

	/*echo time();
	echo '<br>';
	echo mktime( date("H"), date("i")+1, date("s"), date("n"), date("j"), date("Y") );*/

	/*$t = mktime( date("H"), date("i"), date("s"), date("n"), date("j"), date("Y")+1);
	echo date('Y-m-d H:i:s', $t);*/

//date_create — Псевдоним DateTime::__construct()

	/*$date = date_create(date('Y-m-d H:i:s'));
	//var_dump($date);
	echo date_format($date, 'Y-m-d H:i:s');
	date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds'));
	echo '<br>';
	echo date_format($date, 'Y-m-d H:i:s');*/

//microtime — Возвращает текущую метку времени Unix с микросекундами

	//var_dump(microtime());
	//var_dump(microtime(true));

	$start = microtime(true);
	//usleep(1000000);

	for($i = 1; $i <= 1000000000; $i++){
		if($i == 1000000000) echo '<p>Отсчет завершен!</p>';
	}
	$end = microtime(true);
	echo $end - $start;