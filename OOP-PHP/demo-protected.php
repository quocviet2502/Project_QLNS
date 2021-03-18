<?php
	class PerSon{
		protected $name;
	}
	class Male extends PerSon{
		function setName($name){
			$this->name = $name;
		}
		function getName(){
			return $this->name;
		}
	}
	$person = new PerSon();
	$person->name;

	$male = new Male();
	$male->setName("Trần Quốc Việt");
	echo $male->getName();
?>