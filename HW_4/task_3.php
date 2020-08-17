<?php
$dir = 'img/';
$images = scandir($dir);
foreach ($images as $key => $value) {
	if ($value != '.' && $value != '..') {
		echo '<img id="myImg" src=' . $dir . $value . ' style="width: 200px; height: 150px; margin: 15px;">';
		echo "<div id='myModal' class='modal'>
                <span class='close'>×</span>
                <img class='modal-content' id='img01'>
                <div id='caption'></div>
              </div>";
	}
}
?>