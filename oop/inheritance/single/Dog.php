<?php

require_once "Animal.php"; 

/**
* 
*/
class Dog extends Animal
{
	
	public function greet()
	{
		return "Hello,I'm a dog and my name is ".$this->name;
	}
}

 ?>