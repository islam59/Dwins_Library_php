<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

	$pro = new Project(); 

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['username'];
		$user     = $pro->checkUserName($username); 
	}
?>