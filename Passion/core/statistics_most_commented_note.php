<?php
$query_mcnote = "
	SELECT NOTES.TITLE
	FROM COMMENTS, NOTES
	WHERE COMMENTS.ART_ID=NOTES.ID
	GROUP BY NOTES.ID
	ORDER BY COUNT(COMMENTS.ID) DESC LIMIT 0,1
	";
$mcnote = mysqli_query ($link, $query_mcnote);
$row_mcnote = mysqli_fetch_assoc ($mcnote); 
echo "Самая комментируемая запись под названием:<br>";
echo $row_mcnote['TITLE'], "<br>";
mysqli_free_result ($mcnote);