<?php
	class ConNguoi{
		private $name ='' ;

		private function run(){
			return 'Đây là hàm run';
		}
		function setName($name){
			$this->name = $name;
		}
		function getName(){
			return $this->name;
		}
		function getRunMethod(){
			return $this->run();
		}

	}
	$person = new ConNguoi();
	$person->setName('Tran Quoc Viet');
	echo $person->getName();
	echo $person->getRunMethod();	
?>