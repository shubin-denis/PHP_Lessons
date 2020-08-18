

<?php
//Додумался только как сделать грубым способом :(

$fileArr = file('log.txt');
$lines = count($fileArr);

file_put_contents('log.txt', $lines . ') ' . 'Обновление страницы - ' . date("F j, Y, h:i:s A") . PHP_EOL, FILE_APPEND);

if ($lines >= 10 && $lines < 20) {

	file_put_contents('log1.txt', $lines . ') ' . 'Обновление страницы - ' . date("F j, Y, h:i:s A") . PHP_EOL, FILE_APPEND);
} elseif ($lines >= 20 && $lines < 30) {
	file_put_contents('log2.txt', $lines . ') ' . 'Обновление страницы - ' . date("F j, Y, h:i:s A") . PHP_EOL, FILE_APPEND);
} elseif ($lines >= 30 && $lines < 40) {
	file_put_contents('log3.txt', $lines . ') ' . 'Обновление страницы - ' . date("F j, Y, h:i:s A") . PHP_EOL, FILE_APPEND);
} elseif ($lines >= 40 && $lines < 50) {
	file_put_contents('log4.txt', $lines . ') ' . 'Обновление страницы - ' . date("F j, Y, h:i:s A") . PHP_EOL, FILE_APPEND);
} elseif ($lines >= 50 && $lines < 60) {
	file_put_contents('log5.txt', $lines . ') ' . 'Обновление страницы - ' . date("F j, Y, h:i:s A") . PHP_EOL, FILE_APPEND);
}

?>