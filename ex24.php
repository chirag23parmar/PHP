<?php
	echo "Timezone : ".date_default_timezone_get();
		echo "<br>Time : ".date("h:i:s")."<br>";


	date_default_timezone_set("Asia/Kolkata");

	echo "Timezone : ".date_default_timezone_get();
		echo "<br>Time : ".date("h:i:s a")."<br>";
	

?>