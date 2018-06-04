<?php   //class method & object declaration...

	class Person{ //class decl..........
		public $name; 
		public $age; 

		public function personName(){ //method-1 dec.....
			echo "Person Name is: ".$this->name."<br/>"; 
		}

		public function personAge($value){ //method-2 dec....
			echo "Person Age is: ".$this->age=$value; 
		}
	}

	$personOne = new Person; //object dec.....
	$personOne->name="Islam Hossain"; 
	$personOne->personName(); 

	$personOne->personAge("18");
?> 