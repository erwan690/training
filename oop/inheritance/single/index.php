<?php 

require_once "Dog.php";

$animal = new Animal();
echo $animal->greet();
$animal = new Dog();
$animal->name="akse";
echo $animal->greet();
