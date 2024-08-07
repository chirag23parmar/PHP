<?php
	$i=1;
	while($i<=10)
	{
		echo $i."&nbsp&nbsp&nbsp";
		$i++;
	}

	echo "<hr>";
	$i=1;
	while($i<=10)
	{
		$ans=$i*$i;
		echo $i."<sup>2</sup> &nbsp&nbsp = ".$ans."<br>";
		$i++;
	}

?>