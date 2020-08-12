<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWork 3</title>
</head>
<body>

	<h3>Задание 5</h3><br>
	<?php


	$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam autem, eligendi tempora non dicta!';

	function change($words) {
		for ($i=0; $i <= strlen($words); $i++) {
			if ($words[$i] == ' ') {
				$words[$i] = '_';
			}
		}
		return $words;
	};

	echo change($text);


	?>
	<hr>


</body>
</html>