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

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/tsu/user19/Passion/core/connection_php_mysql.php');

$note_id = $_GET['note'];
if (!empty($note_id)) 
{
	$q_notes = "
	SELECT CREATED, TITLE, ARTICLE
	FROM NOTES
	WHERE ID = $note_id
	";
	$send=mysqli_query($link,$q_notes);
	mysqli_query($link,"SET NAMES 'UTF8'");
	$note = mysqli_fetch_array($send);

	echo $note ['TITLE'], " - ", $note ['ARTICLE'], " - ", $note ['CREATED'], "<br><hr>";
	}
?>	
	<a href="editnote.php?note=<?php echo $note_id; ?>">Исправить заметку </a>
	<a href="deleteNote.php?note=<?php echo $note_id; ?>">Удалить заметку </a>
	<br><hr>
	<br><hr>
	<br><hr>
	<br><hr>

<?php
echo "<hr>";
if (!empty($note_id)) 
{
	$q_comments = "
	SELECT *
	FROM COMMENTS
	WHERE ART_ID = $note_id
	ORDER BY CREATED DESC
	";
	$send=mysqli_query($link,$q_comments);
	mysqli_query($link,"SET NAMES 'UTF8'");

	if ($send->num_rows > 0)
	{
		while ($comments = mysqli_fetch_array($send)) 
		{
			echo "Пишет пользователь под ником ", $comments['AUTHOR'], " - ", $comments['CREATED'], ": <br>", $comments['COMMENT'], "<br><hr><br><hr>";
?>
	<a href="deleteComment.php?note=<?php echo $comments['ID']; ?>">Удалить комментарий <?= "<br><hr><br><hr>"?></a>
<?php
		}
	}
	else
	{
		echo "К данной продукции ещё нет комментариев :с <br> <hr>";
	}

	echo "Тут должен быть комментарий к продукции с названием ".$note ['TITLE']."<br><hr><br><hr>";
}
else
{
	echo "Проверьте значения переменной";
}

?>
			<a href="addComment.php?note=<?php echo $note_id; ?>">Добавить комментарий</a>