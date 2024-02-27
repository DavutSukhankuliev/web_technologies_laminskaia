<?php
$q_commentNumber="SELECT count(`ID`) AS `allcomments`
	FROM `COMMENTS`
	";
$send=mysqli_query($link,$q_commentNumber);
mysqli_query($link,"SET NAMES 'UTF8'");
$summ = mysqli_fetch_assoc($send);
echo "Всего комментариев: ", $summ['allcomments'], "<br>";
mysqli_free_result ($send);