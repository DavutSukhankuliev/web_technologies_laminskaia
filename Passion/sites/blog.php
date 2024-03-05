<?php
    $q="SELECT * 
    FROM `NOTES`
    ORDER BY `CREATED` DESC";
    $send=mysqli_query($link,$q);
    mysqli_query($link,"SET NAMES 'UTF8'");
    ?>
    
<table class="article-table">
<?php
$counter = 0; // Initialize a counter to keep track of articles in each row

while ($note = mysqli_fetch_array($send)) {
    if ($counter % 5 == 0) {
        echo '<tr>'; // Start a new row for every 5 articles
    }
?>
    <td class="article-cell">
        <div class="cell-header">
            <a href='sites/comments.php?note=<?= $note['ID'];?>'>
                <?= $note['TITLE']." - ".$note['CREATED'];?>
            </a>
        </div>
        <?= $note['ARTICLE'];?>
    </td>
<?php
    $counter++;
    if ($counter % 5 == 0) {
        echo '</tr>'; // End the row after every 5 articles
    }
}
// Close the row if the total articles are not divisible by 5
if ($counter % 5 != 0) {
    echo '</tr>';
}
?>
</table>