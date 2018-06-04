<?php //polymorphisom EXAMPLE... 

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
$admin = new Admin($user,$id);
$admin->display(); 
echo "<br/>"; 

if($admin instanceof UserData){
	echo "Inherited"; 
}

?> 