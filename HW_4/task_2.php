<?php
$dir = 'img/';
$images = scandir($dir);
foreach ($images as $key => $value) {
	if ($value != '.' && $value != '..') {
		echo '<a href="' . $dir . $value . '" target="_blank"><img src=' . $dir . $value . ' style="width: 200px; height: 150px; margin: 15px;"></a>';
	}
}
?>