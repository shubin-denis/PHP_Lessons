<?php
function getAnswer() {
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
		$firstNum = (int) $_POST['numberOne'];
		$secondNum = (int) $_POST['numberTwo'];
		$action = $_POST['action'];

		if ($firstNum == 0 || $secondNum == 0) {
			return 'Данная операция невозможна';
		}

		if (empty($action)) {
			return 'Необходимо выбрать операцию';
		}

		switch ($action) {
		case 'Сложение':
			$answer = $firstNum + $secondNum;
			break;
		case 'Вычитание':
			$answer = $firstNum - $secondNum;
			break;
		case 'Умножение':
			$answer = $firstNum * $secondNum;
			break;
		case 'Деление':
			$answer = $firstNum / $secondNum;
			break;
		}

		return 'Результат выполнения операции: ' . $answer;
	}
}

?>
<h1>Простой калькулятор</h1>

<form method="post">
    <input type="text" name="numberOne" placeholder="Первое число" style="margin-bottom: 10px;"><br>
    <input type="text" name="numberTwo" placeholder="Второе число" style="margin-bottom: 10px;"><br>
    <select size="1" required name="action" style="margin-bottom: 10px;">
        <option disabled selected>Выберите операцию</option>
        <option value="Сложение">Сложение</option>
        <option value="Вычитание">Вычитание</option>
        <option value="Умножение">Умножение</option>
        <option value="Деление">Деление</option>
   </select><br>
    <input type="submit" style="margin-bottom: 30px;"> <br>
</form>

<?php
echo getAnswer();
?>