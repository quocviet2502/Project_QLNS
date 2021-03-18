<?php
	class Foo{
		public function __destruct(){
			echo "test";
		}

	}
	$foo = new Foo();
?>