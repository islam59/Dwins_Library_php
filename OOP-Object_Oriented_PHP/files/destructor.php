<?php //destructor example....
	
	class Person{ //class decl..........
		public $name; 
		public $age; 
		public $id; 

		public function __construct($name,$age){
			$this->name = $name; 
			$this->age  = $age; 
		}

		public function setId($id){
			$this->id = $id; 
		}

		public function __destruct(){
			if(! empty($this->id)){
				echo "Saving Person"; 
			}
		}
	}

	$personOne = new Person("Akbar Hossain","28"); 
	$personOne->setId(12); 
	
	unset($personOne);//not mandatory... 

?> 