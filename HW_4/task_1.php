<?php
$images = [
	'img/1.jpg',
	'img/2.jpg',
	'img/3.jpg',
];

foreach ($images as $value) {
	if ($value != '.' && $value != '..') {
		echo '<a href=' . $value . ' target="_blank"><img src=' . $value . ' style="width: 200px; height: 150px; margin: 15px;"></a>';
	}
}
echo "<br>";
?>