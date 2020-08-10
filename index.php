<?php
	$a = rand(-30, 30);
	$b = rand(-30, 30);
	$c = rand(0, 15);
	$d = rand(0, 20);
	$e = rand(0, 20);
	$today = date("F j, Y, g:i a");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h4>Задание 1</h4><br>
	<?php

		if ($a >= 0 && $b >= 0) 
		{
			echo $a - $b;
		} elseif ($a < 0 && $b < 0) 
		{
			echo $a * $b;
		}else 
		{
			echo $a + $b;
		}

	?>
	<h4>Задание 2</h4><br>

	<?php
		
		switch ($c) {
			case '0':
				echo '0';
			case '1':
				echo '1';
			case '2':
				echo '2';
			case '3':
				echo '3';
			case '4':
				echo '4';	
			case '5':
				echo '5';
			case '6':
				echo '6';
			case '7':
				echo '7';
			case '8':
				echo '8';
			case '9':
				echo '9';
			case '10':
				echo '10';
			case '11':
				echo '11';
			case '12':
				echo '12';	
			case '13':
				echo '13';
			case '14':
				echo '14';
			case '15':
				echo '15';
			break;
		}

	?>
	<h4>Задание 3</h4><br>

	<?php
		function add($d, $e)
		{
			return $d + $e;
		};

		function sub($d, $e)
		{
			return $d - $e;
		};

		function multi($d, $e)
		{
			return $d * $e;
		};

		function div($d, $e)
		{
			return $d / $e;
		};

		echo add($d, $e) . '<br>';
		echo sub($d, $e) . '<br>';
		echo multi($d, $e) . '<br>';
		echo div($d, $e) . '<br>';

	?>

	<h4>Задание 4</h4><br>

	<?php
		function mathOperation($arg1, $arg2, $operation)
		{
			switch ($operation) {
				case 'add':
					return $arg1 + $arg2;
					break;
				
				case 'sub':
					return $arg1 - $arg2;
					break;

				case 'multi':
					return $arg1 * $arg2;
					break;
					
				case 'div':
					return $arg1 / $arg2;
					break;
			}	
		}

		echo mathOperation($d, $e, 'add') . '<br>';
		echo mathOperation($d, $e, 'sub') . '<br>';
		echo mathOperation($d, $e, 'multi') . '<br>';
		echo mathOperation($d, $e, 'div') . '<br>';
	?>

	<h4>Задание 6</h4><br>

	<?php
		function power($val, $pow)
		{
			if ($val == 0)
			{
				return 0;
			}elseif ($pow == 0)
			{
				return 1;
			}elseif ($pow < 0)
			{
				return power(1/$val, -$pow);
			}else
			return $val *  power($val, $pow-1);
		};
		echo power($d, $e);
	?>

	<h4>Задание 7</h4><br>

	<?php
		$h = date("H")-1;
		$m = date("i");
		if ($h==1 || $h==21) 
		{
			$hours = " час";
		}elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) 
		{
			$hours = " часа";
		}else 
		{
			$hours = " часов";
		}
		if (($m<20) || ($m>10))
		{
			$minutes = " минут.";
		}elseif (($m % 10) === 1) 
		{
			$minutes = " минута.";
		}elseif ((($m % 10)>=2) && (($m % 10)<=4)) 
		{
			$minutes = " минуты.";
		}else 
		{
			$minutes = " минут.";
		}
		echo $h . $hours . " " . $m . $minutes;
	?>

	<h4>Задание 5</h4><br>
	<footer style="flex: 0 0 auto;">
		<h3>
			<?php
				echo "Сегодня у нас $today";
			?>
		</h3>
	</footer>
</body>
</html>