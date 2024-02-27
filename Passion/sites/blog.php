<?php
	$q="SELECT * 
	FROM `NOTES`
	ORDER BY `CREATED` DESC";
	$send=mysqli_query($link,$q);
	mysqli_query($link,"SET NAMES 'UTF8'");
	while ($note = mysqli_fetch_array($send))
	{
		?>
		<a href='sites/comments.php?note=<?= $note['ID'];?>'>
		<?= $note ['TITLE']." - ".$note ['ARTICLE']." - ".$note ['CREATED']."<hr>";?></a>
		<?php
	}
?>