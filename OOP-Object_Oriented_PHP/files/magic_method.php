<?php 

//Magic Methods
/*
	__construct()
	__destruct()
	__get($property)
	__set($property,$value)
	__call($method, $arg_array)
*/

 class Student{

 	public $name; 

 	public function describe(){
 		echo "I am a Student.<br/>"; 
 	}

 	public function __get($pm){
 		echo "$pm does not exists <br/>"; 
 	}

 	public function __set($pm, $value){
 		echo "We set $pm -> $value <br/>"; 
 	}

 	public function __call($pm, $value){
 		echo 'There is no <b>'.$pm.'</b> Method and Arguments: '.implode(', ',$value); 
 	}
 }

$st = new Student(); 
$st->describe();

$st->Hasan; 
$st->age=15; 

$st->notExistMethod('1','2','4');

?>