<?php 

//interface

interface School{
	public function mySchool(); 
}

interface College{
	public function mySchool(); 
}

interface Versity{
	public function mySchool(); 
}


class Teacher implements School, College, Versity{

	public function __construct(){
		$this->mySchool(); 
		$this->myCollege(); 
		$this->myVersity(); 
	}

	public function mySchool(){
		echo "I am a School Teacher. <br/>"; 
	}

	public function myCollege(){
		echo "I am a college Teacher. <br/>"; 
	}
	public function myVersity(){
		echo "I am a versity Teacher. <br/>"; 
	}

}

class Student implements School, College, Versity{

	public function __construct(){
		$this->mySchool(); 
		$this->myCollege(); 
		$this->myVersity(); 
	}

	public function mySchool(){
		echo "I am a School STUDENT. <br/>"; 
	}

	public function myCollege(){
		echo "I am a college STUDENT. <br/>"; 
	}
	public function myVersity(){
		echo "I am a versity STUDENT. <br/>"; 
	}


}

$Teacher = new Teacher(); 
$Student = new Student(); 

?> 