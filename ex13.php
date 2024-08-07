<?php
	$a=array(11,22,33,44,55);

	echo "array a[0] : ".$a[0]."<br>";
	echo "array a[1] : ".$a[1]."<br>";
	echo "array a[2] : ".$a[2]."<br>";
	echo "array a[3] : ".$a[3]."<br>";
	echo "array a[4] : ".$a[4]."<hr><pre>";
	print_r($a);
	echo "</pre><hr>";

	for($i=0;$i<5;$i++)
		echo "Array a[".$i."] = ".$a[$i]."<br>";
?>
