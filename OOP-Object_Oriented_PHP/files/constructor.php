<?php  //constructor example....
	
	class Person{ //class decl..........
		public $name; 
		public $age; 

		public function __construct($name,$age){
			$this->name = $name; 
			$this->age  = $age; 
		}

		public function personDetails(){ //method-1 dec.....
			echo "Person Name is {$this->name} and person age is {$this->age}";
		}

	
	}

	$personOne = new Person("Akbar Hossain","28"); 
	$personOne->personDetails(); 

?> 