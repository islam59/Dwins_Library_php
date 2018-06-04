<?php 
	//01. class, method & object..

	class Person{
		public $name; //access modifier public, private, protected..
		public $age; 

		public function personName(){ //method 1..
			echo 'Person Name is : '.$this->name.'<br/>'; //this indicate class property..
		}

		public function personAge($value){ //method 2..
			echo 'Person Age is : '.$this->age=$value; 
		}
	}

	$personOne = new Person; //object create..
	$personOne->name='Ariful Islam'; // -> is called object operatior.object member ke access koray.. 
	$personOne->personName(); 

	$personOne ->personAge('18');


?>