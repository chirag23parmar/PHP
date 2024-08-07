<?php

	$a=4;
	$b=5;
	$op='+';

	switch ($op)
	 {
		case '+':
				echo "Sum = ".$a+$b;
				break;
		case '-':
				echo "Sub = ".$a-$b;
				break;

		case '*':
				echo "Mul = ".$a*$b;
				break;
		case '/':
				echo "Div = ".$a/$b;
				break;
		default:
				echo "Error";
				break;
	}
?>