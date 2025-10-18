<?php

declare(strict_types=1);

class Fruit
{
    public $name;
    public $color;

    // Methods
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getColor(): string
    {
        return $this->color;
    }
}


$apple = new Fruit();
$banana = new Fruit();

$apple->setName(name: "Apple");
$apple->setColor(color: "red");
$banana->setName(name: "Banana");
$banana->setColor(color: "yellow");

echo $apple->getName();
echo "<br>";
echo $banana->getName();
echo "<br>";
echo $apple->getColor();
echo "<br>";
echo $banana->getColor();

echo "<br>";
// Instance of
var_dump($apple instanceof Fruit);
