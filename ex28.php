Create dynamic program using oops(Numbers entered by user)
<form>
Enter first number<input type="text" name="f"/><br/>
Enter second number<input type="text" name="s"/><br/>
<input type="submit" value="Show result"/>
</form>
<?php
	class demo
	{
		function add($a,$b)
		{   
			$sum=$a+$b;
			echo "Sum=".$sum."<br/>";	
		}
		function sub($x,$y)
		{
			$sub=$x-$y;
			echo "Subtraction=".$sub;	
		}
	}
	$obj= new demo();
	$obj->add($_GET['f'],$_GET['s']);
	$obj->sub($_GET['f'],$_GET['s']);
?>

