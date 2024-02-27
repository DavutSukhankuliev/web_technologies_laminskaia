<?php
$date_array = getdate();
$begin_date = date ("Y-m-d", mktime(0,0,0,$date_array['mon'],1,$date_array['year']));
$end_date = date ("Y-m-d", mktime(0,0,0,$date_array['mon'] + 1,0, $date_array['year']));

$q = "SELECT COUNT(`ID`) AS `lmcomments`
	FROM `COMMENTS`
	WHERE created>='$begin_date' AND
		created<='$end_date'
		";
$lmcomments = mysqli_query ($link, $q);
$row_lmcomments = mysqli_fetch_assoc ($lmcomments);
echo "Комментарии за текущий месяц: ", $row_lmcomments['lmcomments'], "<br>";
mysqli_free_result ($lmcomments);
