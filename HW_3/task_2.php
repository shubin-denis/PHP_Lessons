<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWork 3</title>
</head>
<body>

	<h3>Задание 2</h3><br>
	<?php
		$a = 0;

		 do{
			if ($a == 0) {
				echo $a . ' - ноль' . '<br>';
			}elseif ($a % 2 != 0) {
				echo $a . ' - нечетное число' . '<br>';
			}else {
				echo $a . ' - четное число' . '<br>';
			}

			$a++;
		} while ( $a <= 10 )
	?>
	<hr>


</body>
</html>