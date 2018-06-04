<?php 


//Autoloading classes...
//1- include "classes/Ruby.php";
//2- include "classes/Java.php";
//3- include "classes/Php.php";
//not need to use 1,2,3 when we used the  autoloading funciton...

/*
function __autoload($class_name){
	include "classes/".$class_name.".php";
}

OR->
*/

spl_autoload_register(function($class_name){
	include "classes/".$class_name.".php"; 
});

$ruby = new Ruby; 
$java = new Java;
$php  = new Php; 




?> 