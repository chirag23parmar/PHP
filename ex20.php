<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Example</title>
</head>
<body>
	<form method="post" action="ex20.php">
		<table>
			<tr>
				<th>Enter Any No :</th>
				<td><input type="text" name="no1"></td>
			</tr>
			<tr>
				<th>Enter Any No :</th>
				<td><input type="text" name="no2"></td>
			</tr>
			<tr>
				<th><input type="submit" value="SUM" name="SUBMIT"/></th>
				<th><input type="submit" value="MUL" name="MUL"/></th>
				<th><input type="reset" value="RESET" /></th>
			</tr>
		</table>
	</form>

</body>
</html>
<?php

	if($_POST['SUBMIT'])
	{
		function Sum($x,$y)
		{
			echo "Sum = ".$x+$y;
		}

		Sum($_POST['no1'],$_POST['no2']);

	}
	if($_POST['MUL'])
	{
		function mul($x,$y)
		{
			echo "Mul = ".$x*$y;
		}

		mul($_POST['no1'],$_POST['no2']);
	}
?>

