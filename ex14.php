<?php

	$a=["HTML","CSS","PHP","MYSQL","JS","PYTHON","C++","JAVA"];
	#$n=array_count_values($a);
	$n=count($a);
	echo "<ol>";
	for($i=0;$i<$n;$i++)
	{
		echo "<li>".$a[$i]."</li>";
	}
	echo "</ol>";
?>