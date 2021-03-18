<?php
	class ConNguoi{
		public $name = "Tran Quoc Viet";
		public $mat;
		public $mui;

		const SOCHAN = 2;

		public function an(){

		}
		public function noi(){
			return $this->getName();
		}
		public function di(){

		}
		public function getSoChan(){
			return self::SOCHAN;
		}	
		public function getName(){
			return $this->name;
		}
	}
	$connguoi = new ConNguoi();
	
	echo $connguoi->name 

	

?>