<?php

require_once "Animal.php";

/**
*
*/
class Cat extends Animal
{
    public function greet()
    {
        return "Hello,I'm a cat and my name is ".$this->name;
    }
}
