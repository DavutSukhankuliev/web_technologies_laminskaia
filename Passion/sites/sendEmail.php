<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">	  	
		<link rel="stylesheet" href="http://tsulab.ru/tsu/user19/Passion/style.css">
		<title>Passion</title>
	</head>
	<body>
	<header class="clearfix">
    <div class="container">
			<div class="header-left">
				<h1>Passion</h1>
			</div>
			<div class="header-right">
				<label for="open">
					<span class="hidden-desktop"></span>
				</label>
				<input type="checkbox" name="" id="open">
				<nav>
					<a href="http://tsulab.ru/tsu/user19/Passion/index.php?button=1">Главная</a>
					<a href="http://tsulab.ru/tsu/user19/Passion/index.php?button=2">Связаться с нами</a>
					<a href="http://tsulab.ru/tsu/user19/Passion/index.php?button=3">Статистика</a>
				</nav>
			</div>
		</div>
	</header>
	<section class="clearfix">
		<div class="container">
			<div class="section-left">
				<h1 class="section-title">Ваши passionate хендмейкеры ждут заказа</h1>
				<h5 class="section-tagline">Данный сайт несёт ознакомительный характер</h5>
			</div>
			<div class="section-right">
				<form method="get" action="http://tsulab.ru/tsu/user19/Passion/index.php">
					<button class="learn-more" name="button" value="4">Узнать больше!</button>
				</form>
			</div>
		</div>
	</section>
	</body>

<?php
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$email = 'PassionUSER19@gmail.com';

	if (!empty($subject) and !empty($message)) 
	{
		if (mail($email, $subject, $message)) 
		{
			echo '<br>', 'Письмо отправлено';
		}
		else
		{
			echo '<br>', 'Ошибка отправки';
		}
	}
	else
	{
		echo '<br>', 'Для отправки письма необходимо ввести все данные!', '<br>',
		'Повторите попытку, перейдя в раздел НАПИСАТЬ НАМ';
	}
	
?>

</html>