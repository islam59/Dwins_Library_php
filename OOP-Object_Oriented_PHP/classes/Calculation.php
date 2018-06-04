<?php 
	
	Class Calculation{
		public $a = 0; 
		public $b = 0;
		public $result; 

		public function getValue($x,$y){
			$this->a = $x; 
			$this->b = $y; 

			return $this; 
		}

		public function getResult(){
			$this->result = $this->a * $this->b; 
			return $this->result; 
		}
	}

?>