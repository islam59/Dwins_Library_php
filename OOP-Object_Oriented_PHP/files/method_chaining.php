<?php 

//METHOD CHAINING IN PHP 

//Class load...
spl_autoload_register(function($class_name){
	
	include "classes/".$class_name.".php"; 
});


/*EXAMPLE 1(ONE)...
$php = new Php; //example object
$php->framework()->cms(); //example call
*/

//EXAMPLE 2(Two)..
$cal = new Calculation; 
echo "The Multiplication Result is = ".$cal->getValue(5,10)->getResult(); 


?> 