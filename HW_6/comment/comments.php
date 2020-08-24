<?php

$dataLink = mysqli_connect('localhost', 'root', 'root', 'php_lessons');

$c = mysqli_query($dataLink, "SELECT id FROM images WHERE name = '$linkID';");
$arrC = mysqli_fetch_all($c, MYSQLI_ASSOC);
$goodId = $arrC['0']['id'];

$commentsQuery = mysqli_query($dataLink, "SELECT `text` FROM comment WHERE good_id = '$goodId';");
$allComments = mysqli_fetch_all($commentsQuery, MYSQLI_ASSOC);

echo "<pre>";
var_dump($allComments);
echo "<pre>";

foreach ($allComments as $value) {
	foreach ($value as $key1 => $value1) {
		echo '<p> ' . $value1['text'] . ' </p>';
	}
}

?>