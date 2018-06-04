<?php 

	class Java_hinting{
		public $fromphp; 
		function __construct(Php $value){
			$this->fromphp = $value; 
			$this->fromphp->framework(); 
			$this->fromphp->cms(); 
		}

	}

?>