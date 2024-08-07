<?php
	$n=154;
	$total=0;
	$a=$n;
	while($a!=0)
	{
		$rem=$a%10;
		$total=$total+$rem*$rem*$rem;
		$a=$a/10;
	}

	if($n==$total)
	{
		echo "Yes it is an Armstrong Number :";
	}
	else
	{
		echo "No it is not an Armstrong Number :";
	}

?>