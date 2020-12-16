<?php

error_reporting(-1);

// Что считается false

/*
var_dump(false); //сам false
var_dump((bool) 0); //ноль
var_dump((bool) ''); //пустая строка
*/

/*
$light = 'red';

if( $light == 'green' ){
	echo 'We may go!';
}
*/

//var_dump( 5 < 3 );

/*
if( 5 != 5){
	echo 'OK';
}
*/

//if( 5 != 4) echo 'OK';

/*
if( 5 != 4){
	echo 'OK';
	echo 2;
}
*/

$light = 'green';

if( $light == 'green' ){
	if( 5 > 3){
		echo'<p>5 > 3</p>';
	}
	echo 'We may go!';
}elseif( $light == 'yellow' ){
	echo 'We may ready!';
}else{
	echo 'We must stop!';
}