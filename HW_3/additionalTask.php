<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWork 3</title>
</head>
<body>

<div style="margin: 0 43% 0;">
    <?php
    	echo "<table border =\"1\" style='border-collapse: collapse; text-align: center;'>";
		for ($row = 0; $row <= 10; $row++) {
			echo "<tr> \n";

		for ($col = 0; $col <= 10; $col++) {
			if($row == 0 && $col == 0)
				echo '<td> x </td>';
		else if ($row == 0 && $col != 0)
			echo "<td>$col</td>";
		else if ($row != 0 && $col == 0)
			echo "<td>$row</td>";
		else {
			$p = $col * $row;
			echo "<td>$p</td> \n";
		}

}
echo "</tr>";
}
echo "</table>";
?>
</div>
</body>
</html>