<?php
$q_noteNumber="SELECT count(`ID`) AS `allnotes`
	FROM `NOTES`
	";
$send=mysqli_query($link,$q_noteNumber);
mysqli_query($link,"SET NAMES 'UTF8'");
$summ = mysqli_fetch_assoc($send);
echo "Всего записей: ", $summ['allnotes'], "<br>";
mysqli_free_result ($send);