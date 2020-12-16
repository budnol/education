<?php

setcookie('test', 'My value', time() + 3600);
/*setcookie('test', '', time() - 3600);
setcookie('test2', '', time() - 3600, '/');*/

echo $_COOKIE['test'];
echo '<br>';
// echo $_COOKIE['test2']; 

/*isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], strtotime("+1 hour"), '/') : 
setcookie('counter', 1, strtotime("+30 hours"), '/');

echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;*/

