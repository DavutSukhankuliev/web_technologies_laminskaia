<?php
	if (isset($_POST['post'])) 
	{
		require_once($_SERVER['DOCUMENT_ROOT'].'/tsu/user19/Passion/core/connection_php_mysql.php');

		$author = $_POST['author'];
		$created = $_POST['created'];
		$comment = $_POST['comment'];
		$art_id = $_GET['note'];

		if (!empty($author) and !empty($created) and !empty($comment)) 
		{
			$query = "
		INSERT INTO COMMENTS (AUTHOR, CREATED, COMMENT, ART_ID) 
		VALUES ('$author', '$created', '$comment', '$art_id')
		";

		mysqli_query($link,$query);
		mysqli_query($link,"SET NAMES 'UTF8'");

		echo '<script>setTimeout(function(){ window.location.href = "https://tsulab.ru/tsu/user19/Passion/sites/comments.php?note='.$art_id.'"; }, 3000);</script>';
        echo "Комментарий успешно добавлен. Вы будете перенаправлены через 3 секунды...";
        exit();
		}
		else
		{
			echo '<br>', 'Для публикации бренда необходимо ввести все данные!', '<br>',
			'Повторите попытку, перейдя в раздел ...';
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">	  	
		<link rel="stylesheet" href="https://tsulab.ru/tsu/user19/Passion/style.css">
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
					<a href="https://tsulab.ru/tsu/user19/Passion/index.php?button=1">Главная</a>
					<a href="https://tsulab.ru/tsu/user19/Passion/index.php?button=2">Связаться с нами</a>
					<a href="https://tsulab.ru/tsu/user19/Passion/index.php?button=3">Статистика</a>
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
				<form method="get" action="https://tsulab.ru/tsu/user19/Passion/index.php">
					<button class="learn-more" name="button" value="4">Узнать больше!</button>
				</form>
			</div>
		</div>
	</section>
	</body>
	<body>
		<form id="addcomment" name="addcomment" method="post">
			<caption>Добавить новый комментарий: </caption>			
				<p>Автор комментария: </p>
				<input type="text" name="author" id="author" size="25" maxlength="24">		
				<p>Текст комментария: </p>			
				<textarea name="comment" id="comment" cols="100" rows="15"></textarea>		
				<input type="hidden" name="created" id="created" value ="<?php echo
date("Y-m-d");?>"/>
				<p><input type="submit" name="post" value="Отправить!"></p>
		</form>
	</body>
</html>
