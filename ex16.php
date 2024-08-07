<?php

	$a=array(
		array(101,"Raj",26,"CSP"),
		array(102,"Deep",28,"CHNA"),
		array(103,"Meet",25,"DISM"),
		array(104,"Amit",21,"CSP")
	);
	echo "<pre>";
	print_r($a);
	echo "</pre><hr>";

	echo "Id = ".$a[0][0]."<br>";
	echo "Name = ".$a[0][1]."<br>";
	echo "Age = ".$a[0][2]."<br>";
	echo "Course = ".$a[0][3]."<br>";
?>