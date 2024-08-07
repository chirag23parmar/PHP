Access current class methods inside other method
<?php
	class demo
	{
		var $first=10;
		var $second=5;
		function  add( )
		{   
			$add=$this->first + $this->second;
			echo "Addition=".$add."<br/>";	
		}
		function sub( )
		{
			$sub=$this->first - $this->second;
			echo "Subtraction=".$sub."<br/>";	
		}
		function summary()
		{
			$this->add();
			$this->sub();
			$res=$this->first*$this->second;
			echo "Multiplication=".$res;
		}
	}
		$obj= new demo();
		$obj->summary();

		$obj2=new demo();

		$obj2->add();
?>
