<?php

	$a=array("Raj"=>34,"Meet"=>12,"Bipin"=>21,"Yash"=>25);

	echo "<pre>Array :";
	print_r($a);
	echo " ksort() - sort associative arrays in ascending order, according to the key";
	ksort($a);
	print_r($a);

	echo "krsort() - sort associative arrays in descending order, according to the key";
	krsort($a);
	print_r($a);
	echo "</pre>";
?>