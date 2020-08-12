<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWork 3</title>
</head>
<body>

	<h3>Задание 8</h3><br>
	<?php
		$arr = [
				'Курская Область' => [
					'Обоянь',
					'Курск',
					'Курчатов'
				],

				'Липецкая Область' => [
					'Лебедянь',
					'Липецк',
					'Елец'
				],

				'Тверская Область' => [
					'Бологое',
					'Конаково',
					'Тверь'
				]

			];

			//var_dump($arr) . '<br>';

		foreach ($arr as $oblast => $city) {
			echo $oblast . ':' . '<br>';
			foreach ($city as $value) {
				if (mb_substr($value, 0, 1) == "К") {
					echo $value . ', ';
				}
			}
			echo "<br>";
			echo "<br>";
		}
	?>
	<hr>


</body>
</html>