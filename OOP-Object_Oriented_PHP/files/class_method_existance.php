<?php 


//class & method existance cheaking...
	include "Student.php"; 
	if (class_exists("Student")) {
		# code...
		$st = new Student();
		
		if(method_exists($st, 'describe')){
			$st->describe(); 
		}else{
			echo "method not found..<br/>"; 
		}

	}else{
		echo "Class Not Found.<br/>"; 
	}




?> 