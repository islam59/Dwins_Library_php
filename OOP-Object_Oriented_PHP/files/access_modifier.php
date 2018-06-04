<?php //ACCESS MODIFIER EXAMPLE...

//public   : accessable from any location..
//private  : only accessable from class & subclass..
//protected: accessable from class not outsite of class..


class UserData{

	public $user; 
	public $userId;

	protected $age = "25"; 

	public function __construct($userName,$userId){
		$this->user = $userName; 
		$this->userId = $userId; 
	}

	public function display(){ //final keywords... to close the overwrite of thes display funciton...
		echo "Username is {$this->user} and userid is {$this->userId}";

		echo "<br/>"; 
		echo $this->age."inside class"; 
	}

}

class Admin extends UserData{
	public $level; 
	public function display(){
		echo "Username is {$this->user} and userid is {$this->userId} And user level is : {$this->level}";
		echo "<br/>"; 
		echo $this->age."in the sub class"; 
	}
}

$user = "Author"; 
$id   = "25"; 
$ur = new UserData($user,$id); 
$ur->display(); 

echo "<br/>";
echo $ur->age;
echo "<br/>"; 
$user = "Admin";
$id = "1"; 
$ad = new Admin($user,$id);
$ad->level = "Administrator";
$ad->display(); 

?> 