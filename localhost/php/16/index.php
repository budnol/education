<?php
    require_once 'inc.php';
    header('Content-Type: text/plain; charset=utf-8');
    header('Content-Disposition: attachment; filename="downloaded.txt"');
    readfile('text.txt');
    die;
    //header('Content-Type: text/html; charset=utf-8');
    //header('HTTP/1.0 304 Not Modified');
    //header('HTTP/1.0 404 Not Found');
    //header('Location: inc.php');
    //header('refresh: 5; url=inc.php');
    //exit;
    //die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--<meta charset="UTF-8">-->
	<title>Document</title>
</head>
<body>

    привет мир!
    <?=$test?>

</body>
</html>