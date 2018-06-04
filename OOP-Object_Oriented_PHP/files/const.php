<?php  //const method example...

class UserData{

	public $user; 
	public $userId;
	const NAME = "Islam Hossain"; //can't be changed...

	public function __construct($userName,$userId){
		$this->user = $userName; 
		$this->userId = $userId; 

		echo "Username is {$this->user} and userid is {$this->userId}"; 
	}

	public function display(){
		echo "Full Name is : ".UserData::NAME; 
	}

	public function __destruct(){
		unset($this->user);
		unset($this->userId);
	}
}

//object of UserData

$user = "Manum"; 
$id   = "25"; 
$ur = new UserData($user,$id); 
echo "<br/>";
$ur->display(); 

?> 