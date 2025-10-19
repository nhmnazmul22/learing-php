<?php

interface Animal
{
    public function makeSound(): void;
}

class Cat implements Animal
{
    public function makeSound(): void
    {
        echo "Meow <br>";
    }
}

class Dog implements Animal
{
    public function makeSound(): void
    {
        echo "Bark <br>";
    }
}

class Cow implements Animal
{
    public function makeSound(): void
    {
        echo "Hamba <br>";
    }
}

// $animal = new Cat();
// $animal->makeSound();

$cat = new Cat();
$dog = new Dog();
$cow = new Cow();
$array = [$cat, $dog, $cow];

foreach ($array as $animal) {
    $animal->makeSound();
}
