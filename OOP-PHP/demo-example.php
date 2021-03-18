<?php
	/**
	 * 
	 */
	class ConNguoi
	{
		
		public $name = "Tran  Quoc Viet";
		public $age = "19";

		
		public function getConNguoi(){
			return $this->name . "-" . $this->age;
		}
	}
	$conNguoi = new ConNguoi;
	
	echo $conNguoi->getConNguoi();
?>