<?php 
	
	Class Calculations{
		public $a = 0; 

		public function getValue(array $x){
			foreach ($x as $value) {
				echo $value[0]; 
				echo " : "; 
				echo $value[1]*$value[2]."<br/>"; 
			}
		}
	}

?>