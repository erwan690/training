<?php 

require_once "Dog.php";
require_once "Cat.php";

$animal = new Animal();
echo $animal->greet();
$animal = new Cat();
echo $animal->greet();
$animal = new Dog();
$animal->name="bear";
echo $animal->greet();
