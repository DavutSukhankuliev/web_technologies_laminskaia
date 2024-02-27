<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cупер сайт </title>
</head>
<body>
<?php
//Создать соединение с сервером
$link = mysqli_connect ("localhost", "alexsoft_f19", "9%NbDYUY", "alexsoft_f9");
if ($link) {
echo "Соединение с сервером установлено", "<br>";
} else {
echo "Нет соединения с сервером";
}

//Создать БД TSUdb
//Сначала формирование запроса на создание
$db = "alexsoft_f19";
$query = "CREATE DATABASE $db";
//Затем реализация запроса на создание. Важна последовательность аргументов функции: соединение с сервером, SQL-запрос.
$create_db = mysqli_query($link, $query);
if ($create_db) {
echo "База данных $db успешно создана";
} else {
echo "База не создана";
}
?>
</body>
</html>