<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>

</head>
<body>
<div style="display: flex; justify-content: center;">

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
    </div>

    <div style="display: flex; justify-content: center;">
<?php
$dir = 'img/';
$images = scandir($dir);
$image = [];
foreach ($images as $key => $value) {
	if ($value != '.' && $value != '..') {
		echo '<a href="' . $dir . $value . '" target="_blank"><img src=' . $dir . $value . ' style="width: 200px; height: 150px; margin: 15px;"></a>';
	}
}
?>

    </div>
    <div style="display: flex; justify-content: center;">
<?php
$dir = 'img/';
$images = scandir($dir);
$image = [];
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

    </div>

    <script src="script.js"></script>
</body>
</html>
