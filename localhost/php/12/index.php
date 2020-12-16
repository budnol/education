<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for</title>
	<!--комментарий-->
</head>
<body>
<?php

$arr = ['Ivanov', 'Petrov', 'Sidorov'];
$arr[5] = 'Pupkin';
$arr[] = 'Doe';
// print_r($arr);

$names = [
	'Ivan' => 'Ivanov',
	'Petr' => 'Petrov',
	'Sidr' => 'Sidorov',
	'Pupik' => 'Pupkin'
];
/*echo '<pre>';
print_r($arr);
echo '</pre>';*/

/*foreach($names as $name){
	echo $name . '<br>';
}*/

/*foreach($names as $key => $name){
	echo "<b>Name:</b> $key, <b>Surname:</b> $name" . '<br>';
}*/

/*foreach($arr as $k => $v){
	echo "<b>Key:</b> $k, <b>Name:</b> $v" . '<br>';
}*/

/*
$a = 2;
if( $a > 3 && $a < 7 ){ // AND
	echo 'OK';
}else{
	echo 'NO';
} */

/*if( $a > 3 || $a < 7 ){ // OR
	echo 'OK';
}else{
	echo 'NO';
} */

/*for($i = 0; $i <= 30; $i++){
	echo $i . '<br>';
	if( $i == 5 ){
		echo '<h1>Found!!!</h1>';	
		break;
	}
}*/

/*for($i = 0; $i <= 30; $i++){
	if( $i >= 10 && $i <= 20 ) continue;
	echo $i . '<br>';
}*/

foreach( $names as $name => $surname ){
	echo $surname . '<br>';
	if( $surname == 'Sidorov' ){
		break;
	}
}

foreach( $names as $name => $surname ){
	if( $surname == 'Sidorov' ){
		continue;
	}
	echo $surname . '<br>';
}

?>
</body>
</html>