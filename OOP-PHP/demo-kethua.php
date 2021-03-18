<?php
	class ParentClass
	{
		function getClass()
		{
			return 'Viet';
		}


	}
	class ChildClass extends ParentClass
	{
		var $name = 'ChildClass';

		function getClass()
		{
			return 'ChildClass';
		}
		function getMethod()
		{
			echo "Đây là phương thức ăn của lớp " . $this->getClass();
		}
		function getMethodParent()
		{
			echo "Đây là phương thức ăn của lớp ".parent::getClass();
		}
	}
	$class = new ChildClass;
	$class->getMethod();
	$class->getMethodParent();
	echo $class->name;
?>