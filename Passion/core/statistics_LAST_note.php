<?php
$query_last_note = "
	SELECT `TITLE`, `ARTICLE`
	FROM `NOTES` 
	ORDER BY `CREATED` 
	DESC LIMIT 0,1
	";
$lastnote = mysqli_query ($link, $query_last_note);
$row_lastnote = mysqli_fetch_assoc ($lastnote); 
echo "Последняя запись:<br>";
echo $row_lastnote['TITLE'], "<br>";
echo $row_lastnote['ARTICLE'], "<br>";
mysqli_free_result ($lastnote);