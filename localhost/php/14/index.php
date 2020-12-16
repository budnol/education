<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>include</title>
	<!--комментарий-->
</head>
<body>

	<p>Lorem ipsum dolor sit amet.</p>

	<?php require_once 'inc/inc.php'  // include в отличие от require даст скрипту продолжить работу будет warning. ?>
	<?php require_once 'inc/inc.php'  // У require будет fatal error. Once подключает единожды. ?>
	<?php print_r($names) ?>

	<p>Lorem ipsum dolor sit amet.</p>


</body>
</html>