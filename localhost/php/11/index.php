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

/*$arr = array('Ivanov', 'Petrov', 'Sidorov');
$arr[5] = 'Pupkin';
$arr[] = 'Doe';
print_r($arr);*/

/*for($i = 1; $i <= 10; $i++){
	echo $i . '<br>';
}*/

/*$names = [
	'Ivan' => 'Ivanov',
	'Petr' => 'Petrov',
	'Sidr' => 'Sidorov',
];*/

//print_r($names);


/*for($i = 0; $i < count($arr); $i++){
	echo $arr[$i] . '<br>';
}*/

echo "<select>\n";
	for($i = 1900; $i <= 2020; $i++){
		echo "\t\t<option>$i</option>\n";
	}
echo "</select>\n\n";

echo "<table border = '1'>\n";
	for($x = 1; $x <= 9; $x++){
		echo "\t<tr>\n";
			for($y = 1; $y <= 9; $y++){
				echo "\t\t<td>$x x $y = " . $x * $y . "</td>\n";
			}
		echo "\t</tr>\n";
	}
echo "</table>\n"


?>
</body>
</html>