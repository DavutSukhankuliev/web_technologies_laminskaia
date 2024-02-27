<?php
	$localhost = "localhost";
	$db = "alexsoft_f19";
	$user = "alexsoft_f19";
	$password = "9%NbDYUY";
	$link = mysqli_connect($localhost, $user, $password, $db) or
trigger_error(mysql_error(),E_USER_ERROR);
if ($link) {
} else {
echo "<br>", "Нет соединения с сервером";
}
?>