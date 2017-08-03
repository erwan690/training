<?php

require_once "Animal.php";

/**
* 
*/
class FourFooted extends Animal
{
	
	public function greet()
	{
		return "Hello,I'm a four footed animal my name is ".$this->name;
	}
}


  ?>