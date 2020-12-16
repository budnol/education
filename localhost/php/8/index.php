<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While</title>
	<!--комментарий-->
</head>
<body>

<?php

/*
$i = 1;
while( $i <= 10 ){
	echo $i . '<br>';
	$i++; //$i = $i + 1; $i += 1;
}
*/

/*
$i = 1;
echo "<table border=\"1\">\n";
while( $i <= 15 ){
	echo "\t<tr>\n";
	$n = 1;
	while( $n <= 5){
		echo "\t\t<td>row $i | col $n</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>';
*/

/*
	echo "<select>\n";
$i = 1900;
while( $i <= 2020){
	echo "\t<option value='$i'>$i</option>\n";
	$i++;
}
	echo "</select>"
*/
/*
$i = 11;
while( $i <= 10 ){
	echo $i++ . '<br>';
}
*/

/*
$i = 11;
do{
	
}while( $i <= 10 );
	echo $i++ . '<br>';
*/

// Домашнее задание

/*
echo "<table border='1'>\n";
		echo "\t<tr>\n";
			$q = 1;
			while( $q <= 9 ){ 	
				echo "\t\t<td>\n";
					$o = 1;
					while( $o <= 9 ){
						$s1 = $q * $o;
						echo "\t\t\t$q x $o = $s1<br>\n";
						$o++;
					}
				echo "\t\t</td>\n";
				$q++;
			}
		echo "\t</tr>\n";
echo "</table>";
*/

echo "<table border = '1'>\n";
	$x = 1;
	while( $x <= 9 ){
		echo "\t<tr>\n";
			$y = 1;
			while( $y <= 9 ){
				echo "\t\t<td>$x x $y = " . $x * $y . "</td>\n";
				$y++;
			}
		echo "\t</tr>\n";
		$x++;
	}
echo "</table>"


?>
</body>
</html>