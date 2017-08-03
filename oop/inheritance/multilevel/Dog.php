<?php

require_once "FourFooted.php"; 

/**
* 
*/
class Dog extends FourFooted
{
	
	public function greet()
	{
		return "Hello,I'm a dog and my name is ".$this->name;
	}
}

 ?>