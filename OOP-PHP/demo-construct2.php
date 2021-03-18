<?php
	class TraiCay{
		public $name;
		public $color;

		public function __construct($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}
	}
	$apple = new TraiCay("Apple");
	echo $apple->getName();
?>