<?php
class A
{
	function testA()
	{
		echo "This is test method of class A";
	}
	function __construct()
	{
		echo "This is user defined constructor of class A"."<br/>";
	}
}
	$obj= new A();
	$obj->testA();
?>