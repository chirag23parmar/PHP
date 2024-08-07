<?php
	class Test
	{
		public $id1;
		public $nm;
		function Show()
		{
				echo "ID = ".$this->id1;
				echo "<br>NAME = ".$this->nm;
		}
	}

	$obj1=new Test();

	$obj1->id1=101;
	$obj1->nm="Happy";

	$obj1->show();
?>