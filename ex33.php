<?php
	class BaseClass
	{
		function add()
		{
			$x=100;
			$y=50;
			$add=$x+$y;
			echo "Addition=".$add."<br/>";
		}
	}
	class chld extends BaseClass
	{
		function sub()
		{
			$x=100;
			$y=50;
			$sub=$x-$y;
			echo "subtraction=".$sub."<br/>";
		 }
	}
	class Nestedchld extends chld
	{
		function mult()
		{
			$x=100;
			$y=50;
			$mult=$x*$y;
			echo "multiplication=".$mult."<br/>";
		}
	}
	class show extends Nestedchld
	{
		function __construct()
		{
			parent::add();
			parent::sub();
			parent::mult();
		}
}
$obj= new show();
?>
