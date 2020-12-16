<?php
error_reporting(-1);
?>

<?php

if(isset($_POST['send'])){
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
}

if(!empty($_GET)){
	echo '<pre>';
	print_r($_GET);
	echo '</pre>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get post</title>
	<!--комментарий-->
</head>
<body>
	<form method="post" action="">
		<p>
			<input type="text" name="name">
		</p>

		<p>
			<textarea name="text"></textarea>
		</p>
		<p>
			<input type="checkbox" name="remember">
		</p>
		<p>
			<select name="lang[]" multiple="">
				<option value="eng">English</option>
				<option value="ru">Russian</option>
				<option value="jp">Japanise</option>
			</select>
		</p>
		<p>
			<button type="submit" name="send" value="test">Send</button>
		</p>
	</form>

	<hr>

	<a href="index.php?name=Петя&amp;test=123">Link</a>

	<p>Введенное имя:<?php  if(!empty($_POST['name'])) echo $_POST['name']; else echo 'Форма не отправлена' ?></p>

	
	<p>Введенный текст:<?php echo !empty($_POST['text']) ? nl2br($_POST['text']) : 'Форма не отправлена' ?></p>

	<p>
		<?php if(isset($_POST['remember']) && $_POST['remember'] == 'on') echo 'Checkbox отмечен!' ?>
	</p>

</body>
</html>