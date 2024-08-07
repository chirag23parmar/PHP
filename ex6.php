<?php

	$a=100;
	$b=34;
	$c=4;

	if($a<$b)
	{
		if($a<$c)
		{
			echo $a." is min";
		}		
		else
		{
			echo $c." is min";
		}
	}
	else
	{
		if($b<$c)
		{
			echo $b." is min"; 
		}
		else
		{
			echo $c." is min";
		}
	}

?>