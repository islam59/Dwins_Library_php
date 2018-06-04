<?php 

//Abstruct Class

abstract Class Student{

	public $name; 
	public $age; 

	public function details(){
		echo $this->name." is ".$this->age." Years old<br/>";
	}

	abstract public function School(); 
}

class Boy extends Student{

	public function describe(){

		return parent::details()." And I am a high school Student<br/>"; 

	}
	 public function School(){
	 	return "I Like to reas story book<br/>"; 
	}
}

$s  = new Boy();
$s ->name = "Islam Hossain";
$s ->age  = "26"; 

echo $s->describe(); 
echo $s->School(); 



?>