<?php
	class parents
	{  
		public $name="shashi";
		protected $profile="developer"; 
		private $salary=50000;
		public function show()
		{
			echo "Welcome : ".$this->name."<br/>";
			echo "Profile : ".$this->profile."<br/>";
			echo "Salary : ".$this->salary."<br/>";
		}
	}	
	class childs extends parents
	{
		public function show1()
		{
			echo "Welcome : ".$this->name."<br/>";
			echo "Profile : ".$this->profile."<br/>";
			echo "Salary : ".$this->salary."<br/>";
		}
	}	
$obj= new childs;	
$obj->show1();
?>
