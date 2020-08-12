<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWork 3</title>
</head>
<body>

	<h3>Задание 3</h3><br>
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

		foreach ($arr as $key => $value) {
			echo $key . ':' . '<br>';
			foreach ($value as $values) {
				if ($values == end($value)) {
					echo $values . '.';
				} else {
					echo $values . ', ';
				}
			}
			echo "<br>";
			echo "<br>";
		}
	?>
	<hr>


</body>
</html>