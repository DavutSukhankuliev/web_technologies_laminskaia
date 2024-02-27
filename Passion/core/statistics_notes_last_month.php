<?php
$date_array = getdate();
$begin_date = date ("Y-m-d", mktime(0,0,0,$date_array['mon'],1,$date_array['year']));
$end_date = date ("Y-m-d", mktime(0,0,0,$date_array['mon'] + 1,0, $date_array['year']));

$q = "SELECT COUNT(`ID`) AS `lmnotes`
	FROM `NOTES`
	WHERE created>='$begin_date' AND
		created<='$end_date'
		";
$lmnotes = mysqli_query ($link, $q);
$row_lmnotes = mysqli_fetch_assoc ($lmnotes);
echo "Записей за текущий месяц: ", $row_lmnotes['lmnotes'], "<br>";
mysqli_free_result ($lmnotes);
