<?php
	$note_id = $_GET['note'];

	echo $note_id;

	require_once($_SERVER['DOCUMENT_ROOT'].'/tsu/user19/Passion/core/connection_php_mysql.php');

	$q_delete = "
	DELETE FROM `COMMENTS`
	WHERE `ID` = '$note_id'
	";

	mysqli_query($link,$q_delete);
?>