<?php
	$comment_id = $_GET['comment'];
	$art_id = $_GET['note'];

	require_once($_SERVER['DOCUMENT_ROOT'].'/tsu/user19/Passion/core/connection_php_mysql.php');

	$q_delete = "
	DELETE FROM `COMMENTS`
	WHERE `ID` = '$comment_id'
	";

	mysqli_query($link,$q_delete);
	echo '<script>setTimeout(function(){ window.location.href = "https://tsulab.ru/tsu/user19/Passion/sites/comments.php?note='.$art_id.'"; }, 3000);</script>';
    echo "Комментарий успешно удален. Вы будете перенаправлены через 3 секунды...";
    exit();
?>