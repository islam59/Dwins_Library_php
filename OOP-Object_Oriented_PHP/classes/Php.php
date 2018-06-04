<?php 

	class Php{

		function __construct(){
			echo "I am Learning PHP Programming.[php class].<hr/>";
		}

		public function framework(){
			echo "CakePhp is a Framework.<hr/>"; 
			return $this; 
		}

		public function cms(){
			echo "WordPress is a CMS.<hr/>";
			return $this; 
		}
	}

?>