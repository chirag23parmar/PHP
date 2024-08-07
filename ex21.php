<?php

	function Fact($n)
	{
			$f=1;	
		for($i=1;$i<=$n;$i++)
		{
			$f=$f*$i;
		}
		echo "Fact : ".$f."<br>";
	}
	echo "Value 5 ";
	Fact(5);

	echo "Value 6 ";
	Fact(6);

?>