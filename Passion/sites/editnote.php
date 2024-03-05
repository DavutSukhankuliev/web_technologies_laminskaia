<?php
	$note_id = $_GET['note'];

	require_once($_SERVER['DOCUMENT_ROOT'].'/tsu/user19/Passion/core/connection_php_mysql.php');

	if (!empty($note_id))
	{
		$q_request = "
		SELECT *
		FROM NOTES
		WHERE ID = $note_id
		";

		$result = mysqli_query($link,$q_request);
		mysqli_query($link,"SET NAMES 'UTF8'");

		$edit_note = mysqli_fetch_array ($result);
	}

	if (isset($_POST['submit'])) 
	{
		$title = $_POST['title'];
		$article = $_POST['article'];

		if (!empty($title) and !empty($article)) 
		{
			$q_update = "
		UPDATE NOTES 
		SET TITLE = '$title',  ARTICLE = '$article'
		WHERE  ID = $note_id
		";

		$update_result = mysqli_query($link,$q_update);
		mysqli_query($link,"SET NAMES 'UTF8'");

		echo '<script>setTimeout(function(){ window.location.href = "https://tsulab.ru/tsu/user19/Passion/index.php"; }, 3000);</script>';
        echo "Запись успешно изменена. Вы будете перенаправлены через 3 секунды...";
        exit();
		}
		else
		{
			echo '<br>', 'Для публикации продукции необходимо ввести все данные!', '<br>',
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
		<form id="editnote" name="editnote" method="post" action="">
			<caption>Изменить заметку: </caption>			
				<p>Производитель: </p>
				<input type="text" name="title" id="title" value="<?= $edit_note['TITLE'];?>" size="25" maxlength="24">		
				<p>Бренд: </p>			
				<textarea name="article" id="article" cols="100" rows="15"><?= $edit_note['ARTICLE'];?></textarea>		
				<input type="hidden" name="note" id="note" value ="<?= $edit_note['ID']?>"/>
				<p><input type="submit" name="submit" id="submit" value="Изменить!"></p>
		</form>
	</body>
</html>