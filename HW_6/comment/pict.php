<?php

function getImg() {
	$dataLink = mysqli_connect('localhost', 'root', 'root', 'php_lessons');
	$dir = mysqli_query($dataLink, "SELECT * FROM images ORDER BY count DESC", MYSQLI_USE_RESULT);
	$arr = mysqli_fetch_all($dir, MYSQLI_ASSOC);
	$link = 'index.php?name=';
	$linkID = $_GET['name'];

	if (!isset($linkID)) {
		foreach ($arr as $key => $value) {
			$id = $key + 1;

			echo '<a href=' . $link . $value['name'] . ' target="_blank"><img src=' . $value['address'] . ' style="width: 200px; height: 150px; margin: 15px;"></a>';
		}
		return;
	}

	mysqli_query($dataLink, "UPDATE images SET count = count+1 WHERE name = '$linkID';");
	$a = mysqli_query($dataLink, "SELECT count FROM images WHERE name = '$linkID';");
	$b = mysqli_query($dataLink, "SELECT address FROM images WHERE name = '$linkID';");
	$arrA = mysqli_fetch_all($a, MYSQLI_ASSOC);
	$arrB = mysqli_fetch_all($b, MYSQLI_ASSOC);
	$c = mysqli_query($dataLink, "SELECT id FROM images WHERE name = '$linkID';");
	$arrC = mysqli_fetch_all($c, MYSQLI_ASSOC);
	$name = $_POST['name'];
	$goodId = $arrC['0']['id'];
	$userComment = $_POST['comment'];

	$commentsQuery = mysqli_query($dataLink, "SELECT name, text FROM comment WHERE good_id = '$goodId';");
	$allComments = mysqli_fetch_all($commentsQuery, MYSQLI_ASSOC);
	$html = '';

	foreach ($allComments as $value) {

		$html .= '<p> Имя: ' . $value["name"] . '</p>
				<p> Комментарий: ' . $value["text"] . '</p><hr>';

	}

	echo '<div style="float: left;">

			<a><img src=' . $arrB['0']['address'] . ' style="width: 30%;"></a>
			<p style="font-weight: bold"> Просмотров за все время ' . $arrA["0"]["count"] . ';</p>
			<div> ' . $html . ' </div>

			<form method="post">
				<input type="text" name="name" placeholder="Ваше имя" style="margin-bottom: 10px;"><br>
    			<textarea name="comment" style="margin: 0px 0px 10px; width: 306px; height: 47px;" placeholder="Комментарий"></textarea><br>
    			<input type="submit">
 			</form>

		  </div>';

	if (!empty($_POST)) {

		$insertComment = "INSERT INTO `comment` (`name`, `good_id`, `text`) VALUES ('$name', '$goodId', '$userComment');";
		mysqli_query($dataLink, $insertComment);

	}

}

?>