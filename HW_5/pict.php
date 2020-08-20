<?php
$dataLink = mysqli_connect('127.0.0.1:3306', 'root', 'root', 'php_lessons');
$dir = mysqli_query($dataLink, "SELECT * FROM `images` ORDER BY `count` DESC", MYSQLI_USE_RESULT);
$arr = mysqli_fetch_all($dir, MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($arr);
// echo "<pre>";

// // $dir = 'img/';
// // $images = scandir($dir);
$link = 'index.php?name=';

$linkID = $_GET['name'];

if (!isset($linkID)) {
	foreach ($arr as $key => $value) {
		$id = $key + 1;
		echo '<a href=' . $link . $value['name'] . ' target="_blank"><img src=' . $value['address'] . ' style="width: 200px; height: 150px; margin: 15px;"></a>';
	}

} else {
	mysqli_query($dataLink, "UPDATE images SET count = count+1 WHERE `name` = '$linkID';");
	$a = mysqli_query($dataLink, "SELECT count FROM images WHERE name = '$linkID';");
	$b = mysqli_query($dataLink, "SELECT address FROM images WHERE name = '$linkID';");
	$arrA = mysqli_fetch_all($a, MYSQLI_ASSOC);
	$arrB = mysqli_fetch_all($b, MYSQLI_ASSOC);

	echo '<div>
	<a><img src=' . $arrB['0']['address'] . '></a>

	<p style="font-weight: bold"> Просмотров за все время ' . $arrA["0"]["count"] . ';</p>
	</div>';

}

?>