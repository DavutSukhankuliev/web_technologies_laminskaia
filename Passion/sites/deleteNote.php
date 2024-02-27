<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">	  	
		<link rel="stylesheet" href="http://tsulab.ru/tsu/user19/Passion/style.css">
		<title>Passion</title>
	</head>

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
?>

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

	<body>
		<form id="deletenote" name="deletenote" method="post" action="">
			<caption>Вы правда хотите удалить заметку "<?= $edit_note['TITLE']?>"? </caption>			
				<input type="hidden" name="note" id="note" value ="<?= $edit_note['ID']?>"/>
				<p><input type="submit" name="submit" id="submit" value="Удалить!"></p>
		</form>
	</body>

<?php
	if (!isset($_POST['submit'])) 
	{
		return;
	}

	$q_delete = "
	DELETE FROM `COMMENTS`
	WHERE `ART_ID` = '$note_id'
	";

	$update_result = mysqli_query($link,$q_delete);
	mysqli_query($link,"SET NAMES 'UTF8'");	

	$q_delete = "
	DELETE FROM `NOTES`
	WHERE `ID` = '$note_id'
	";

	$update_result = mysqli_query($link,$q_delete);
	mysqli_query($link,"SET NAMES 'UTF8'");	
?>

</html>