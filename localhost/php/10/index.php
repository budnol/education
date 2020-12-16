<?php error_reporting(-1);
$arr = array('Ivanov', 'Petrov', 'Sidorov');


$goods = [
	[
		'title' => 'Nokia',
		'price' => 100,
		'discription' => 'discription'
	],

	[
		'title' => 'iPad',
		'price' => 200,
		'discription' => 'discription'
	],
	[
		'title' => 'Sony',
		'price' => 150,
		'discription' => 'discription'
	]							
];

//echo count($goods, 1);

//Сравниваем два массива и выводим из первого тот элемент, которого нет во втором массиве. array_diff
//Сравниваем два массива и выводим из первого те элементы, которые есть во втором массиве. array_intersect

/*
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);

echo'<pre>';
print_r($result);
echo'</pre>';
*/

// Функция смотрит есть ли в массиве нужный элемент по ключу.

/*
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first1', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}else echo 'NO';
*/

//Функция выводит все ключи из массива

/*
$result = array_keys($goods[0]);

echo'<pre>';
print_r($result);
echo'</pre>';

//Функция выводит все значения из массива

$result = array_values($goods[0]);

echo'<pre>';
print_r($result);
echo'</pre>';
*/

//Функция складывает два массива, перезаписывая ключи, кроме числовых.

/*
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = $array1 + $array2; // перезаписывает и числовые ключи
//$result = array_merge($array1, $array2);

echo'<pre>';
print_r($result);
echo'</pre>';
*/

//Функция выбирает рандомный ключ элемент

/*
$result = array_rand($arr, 2);

echo'<pre>';
print_r($result);
echo'</pre>';
*/

//Функция переворачивает массив. Если добавить тру, то переиндексации не будет.

/*
$result = array_reverse($arr, true);

echo'<pre>';
print_r($result);
echo'</pre>';
*/

//Функция помещает переменные в массив.

/*
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$result = compact('city', 'state', 'event');

echo'<pre>';
print_r($result);
echo'</pre>';
*/

//Функция извлекает из массива переменные. Работает только с ассоциативными массивами.
//Так как переменные не могут начинаться с цифры.

/*
$result = [
	'city' => 'LA',
	'state' => 'NY',
	'event' => 'DO',
];

extract($result);
echo $state;

echo'<pre>';
print_r($result);
echo'</pre>';
*/

/* Функции

asort - сортирует по алфавиту не меняя ключи
arsort - сортирует в обратном порядке по алфавиту не меняя ключи
rsort - сортирует в обратном порядке по алфавиту меняя ключи. Так же для числовых ключей.
sort - сортирует в прямом порядке по алфавиту меняя ключи. Так же для числовых ключей.

krsort - сортирует по ключам в обратном порядке
ksort - сортирует по ключам в прямом порядке

*/

// Домашнее задание

//array_combine - создает новый массив используя один как ключи, а второй как значения.

	/*$a = array('green', 'red', 'yellow');
	$b = array('avocado', 'apple', 'banana');
	$c = array_combine($a, $b);*/

//array_search - осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи

	/*$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

	$key = array_search('green', $array); // $key = 2;
	$key = array_search('red', $array);   // $key = 1;*/

//array_shift - извлекает первый элемент массива

	/*$stack = array("orange", "banana", "apple", "raspberry");
	$fruit = array_shift($stack);*/

//array_unique - убирает повторяющиеся значения из массива.

	/*$input = array("a" => "green", "red", "b" => "green", "blue", "red");
	$result = array_unique($input);*/

//array_unshift — Добавляет один или несколько элементов в начало массива

	/*$queue = array("orange", "banana");
	array_unshift($queue, "apple", "raspberry");*/

//array_flip — Меняет местами ключи с их значениями в массиве

	/*$input = array("oranges", "apples", "pears");
	$flipped = array_flip($input);
	*/

//array_pop — Извлекает последний элемент массива

	/*$stack = array("orange", "banana", "apple", "raspberry");
	$fruit = array_pop($stack);*/

// array_push — Добавляет один или несколько элементов в конец массива

	/*$stack = array("orange", "banana");
	array_push($stack, "apple", "raspberry");*/

//in_array — Проверяет, присутствует ли в массиве значение

	/*$os = array("Mac", "NT", "Irix", "Linux");
		if (in_array("Irix", $os)) {
    		echo "Нашел Irix";
		}s
		if (in_array("Mac", $os)) {
    		echo "Нашел Mac";
		}*/

//list — Присваивает переменным из списка значения подобно массиву

		/*$info = ['кофе', 'коричневый', 'кофеин'];

		// Составить список всех переменных
			list($drink, $color, $power) = $info;
			echo "$drink - $color, а $power делает его особенным.\n";

		// Составить список только некоторых из них
			list($drink, , $power) = $info;
			echo "В $drink есть $power.\n";

		// Или пропустить все, кроме третьей
			list( , , $power) = $info;
			echo "Мне нужен $power!\n";

		// list() не работает со строками
			list($bar) = "abcde";
			var_dump($bar); // NULL*/
	
echo'<pre>';
print_r($stack);
echo'</pre>';