<?php
	#break example
	for($i=1;$i<=10;$i++)
	{
		if($i==5)
		{
			break;
		}
		echo $i."&nbsp&nbsp";
	}
	echo "<hr>";
	
	#continue example
	for($i=1;$i<=10;$i++)
	{
		if($i==5)
		{
			continue;
		}
		echo $i."&nbsp&nbsp";
	}
	echo "<hr>";
	#goto example
	for($i=1;$i<=10;$i++)
	{
		if($i==5)
		{
			goto abcd;
		}
		echo $i."&nbsp&nbsp";

	}
	
		abcd:
		echo "loop exit";


?>