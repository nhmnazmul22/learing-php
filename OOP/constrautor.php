<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

$apple = new Fruit(name: "apple", color: "Red");

echo $apple->getName();
echo "<br>";
echo $apple->getColor();
