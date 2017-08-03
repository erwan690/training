<?php 

require_once "Dog.php";

$animal = new Animal();
echo $animal->greet();
$animal = new FourFooted();
echo $animal->greet();
$animal = new Dog();
$animal->name="bear";
echo $animal->greet();


 ?>