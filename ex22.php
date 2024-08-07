<?php

	function alldigitsum($n)
	{
		$sum=0;
		for($i=1;$i<=$n;$i++)
		{
			$sum=$sum+$i;
		}
		echo "Sum = ".$sum;
	}

	alldigitsum(10);
?>