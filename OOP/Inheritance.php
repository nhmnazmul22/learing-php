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

    final protected function intro()
    {
        echo "The fruit is {$this->name} and color is {$this->color}";
    }
}

class Strawberry extends Fruit
{
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    // public function intro()
    // {
    //     echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    // }
    public function message()
    {
        echo "Am I a fruit or a berry? <br>";
        echo $this->intro();
    }
}

$strawberry = new Strawberry("Strawberry", "red", '200mg');
// $strawberry->intro();
$strawberry->message();
