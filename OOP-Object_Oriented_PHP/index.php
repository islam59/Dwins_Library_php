<?php include 'inc/header.php'; ?>
<?php 
//03 constructor...

class Person{

	public $name; 
	public $age; 

	public function __construct($valueOne, $valueTwo){
		$this->name = $valueOne; 
		$this->age  = $valueTwo; 
	}

	public function personDetails(){
		echo "Person Name is : {$this->name} <br/>"; 
		echo "Person Age is  : {$this->age} <br/>";
	}	

}

	$personShow = new Person('Muhammad', '64'); 
	$personShow->personDetails(); 



?>
<?php include 'inc/footer.php'; ?>

