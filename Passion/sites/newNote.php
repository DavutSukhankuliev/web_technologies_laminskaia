<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">	  	
		<link rel="stylesheet" href="http://tsulab.ru/tsu/user8/sonia/style.css">
		<title>Safe grass</title>
	</head>
	<body>
		<div class="tegukidzan">
		<span class="decor"></span>
		<nav>
		  <ul class="zortsavtun">
		    <li>
		      <a href="http://tsulab.ru/tsu/user8/sonia/index.php">Главная</a>
		    </li>
		    <li>
		      <a href="">Заказать</a>
		      <ul class="alarunikdesazmkeb">
		        <li><a href="">Самовывоз</a></li>
		        <li><a href="">Доставка</a></li>
		      </ul>
		    </li>
		    <li>
		      <a href="">Товары</a>
		      <ul class="alarunikdesazmkeb">
		        <li><a href="">Зеленый</a></li>
		        <li><a href="">Фиолет</a></li>
		        <li><a href="">Радужный</a></li>
		      </ul>  
		    </li>
		    <li>
		      <a href="http://tsulab.ru/tsu/user8/sonia/sites/email.html">Написать нам</a>
		      <ul class="alarunikdesazmkeb">
		        <li><a href="http://tsulab.ru/tsu/user8/sonia/sites/newNote.php">Опубликовать новую статью</a></li>
		      </ul>
		    </li>
		    <li>
		      <a href="">О нас</a>
		    </li>
		  </ul>
		</nav>
		</div>
	</body>

	<body>
		<form id="newnote" name="newnote" method="post">
			<caption>Добавить новую заметку: </caption>			
				<p>Заголовок статьи: </p>
				<input type="text" name="title" id="title" size="25" maxlength="24">		
				<p>Текст статьи: </p>			
				<textarea name="article" id="article" cols="100" rows="15"></textarea>		
				<input type="hidden" name="created" id="created" value ="<?php echo
date("Y-m-d");?>"/>
				<p><input type="submit" name="post" value="Отправить статью!"></p>
		</form>
	</body>

<?php
	if (!isset($_POST['post'])) 
	{
		return;
	}

	require_once($_SERVER['DOCUMENT_ROOT'].'/tsu/user8/sonia/core/Connection_php_mysql.php');

	$title = $_POST['title'];
	$created = $_POST['created'];
	$article = $_POST['article'];

	if (!empty($title) and !empty($created) and !empty($article)) 
	{
		$query = "
	INSERT INTO notes (title, created, article) 
	VALUES ('$title', '$created', '$article')
	";

	mysqli_query($link,$query);
	mysqli_query($link,"SET NAMES 'UTF8'");
	}
	else
	{
		echo '<br>', 'Для публикации статьи необходимо ввести все данные!', '<br>',
		'Повторите попытку, перейдя в раздел ...';
	}

	
?>

</html>
