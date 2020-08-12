<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWork 3</title>
</head>
<body>

	<h3>Задание 9</h3><br>
	<?php

	$text = 'добро пожаловать в рай!';

	function transliteration($text) {
		$letters = [
			"а"=>"a",
			"б"=>"b",
			"в"=>"v",
			"г"=>"g",
			"д"=>"d",
			"е"=>"e",
			"ё"=>"e",
			"ж"=>"zh",
			"з"=>"z",
			"и"=>"i",
			"й"=>"i",
			"к"=>"k",
			"л"=>"l",
			"м"=>"m",
			"н"=>"n",
			"о"=>"o",
			"п"=>"p",
			"р"=>"r",
			"с"=>"s",
			"т"=>"t",
			"у"=>"u",
			"ф"=>"f",
			"х"=>"kh",
			"ц"=>"tc",
			"ч"=>"ch",
			"ш"=>"sh",
			"щ"=>"shch",
			"ы"=>"y",
			"э"=>"e",
			"ю"=>"iu",
			"я"=>"ia",
			"ь"=>""
		];

		$words = strtr($text, $letters);

		for ($i=0; $i <= strlen($words); $i++) {
			if ($words[$i] == ' ') {
				$words[$i] = '_';
			}
		}
		return $words;

	};

	echo transliteration($text);

	?>
	<hr>


</body>
</html>