<?php  //static property & method example...

class UserData{

	public $user; 
	public $userId;
	const NAME = "Islam Hossain"; 
	public static $age = "30"; 


	public function __construct($userName,$userId){
		$this->user = $userName; 
		$this->userId = $userId; 

		echo "Username is {$this->user} and userid is {$this->userId}"; 
	}

	public static function display(){
		echo "Full Name is : ".UserData::NAME."<br/>"; 
		echo "Age is : ".self::$age; //static property access..
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
// $ur->display(); //static property call..

UserData::display();

?> 