<?php error_reporting(-1);
$arr = array('Ivanov', 'Petrov', 'Sidorov');
//var_dump($arr);

$arr[1] = 'Pupkin';

echo'<pre>';
print_r($arr);
echo'</pre>';

//echo $arr[0] . '<br>';
//echo $arr{2};

/*
$arr2 = [1, 2, 3, 4, 'cat', ['banana', 'orange', 'apple'], 7, 8, 9, 10,];
echo'<pre>';
print_r($arr2);
echo'</pre>';*/

//echo $arr2[5][2];

/*
$arr3 = [
	2 => 'Ivanov',
	4 => 'Petrov',
	10 => 'Sidorov',
	'Pupkin'
];
echo'<pre>';
print_r($arr3);
echo'</pre>';
echo $arr3[4];
*/

/*
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

$i = 0;
while($i < 3){
	echo $goods[$i]['title'] . '-' . $goods[$i]['price'];
	echo '<br>';
	$i++;
}
*/

/*
echo'<pre>';
print_r($goods);
echo'</pre>';

echo $goods[0]['title'] . '-' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . '-' . $goods[1]['price'];
*/
