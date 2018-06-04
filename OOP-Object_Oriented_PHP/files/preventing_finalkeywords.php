<?php  //preventing from extending & overriding.. N.B. closing the uses of class or method by using final keywords before the class & method..

class UserData{

	public $user; 
	public $userId;

	public function __construct($userName,$userId){
		$this->user = $userName; 
		$this->userId = $userId; 
	}

	public final function display(){ //final keywords... to close the overwrite of thes display funciton...
		echo "Username is {$this->user} and userid is {$this->userId}";
	}

}

class Admin extends UserData{
	public $level; 
	public function display(){
		echo "Username is {$this->user} and userid is {$this->userId} And user level is : {$this->level}";
	}
}

$user = "Manum"; 
$id   = "25"; 
$ur = new UserData($user,$id); 
echo "<br/>";

$user = "Admin";
$id = "1"; 
$ad = new Admin($user,$id);
$ad->level = "Administrator";
$ad->display(); 

?> 