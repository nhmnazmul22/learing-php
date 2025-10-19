<?php

abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

class Audi extends Car
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

$audi = new Audi("audi");
echo $audi->intro();

echo "<br>";
$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

// Example 2
abstract class parentClass
{
    abstract public function prefix($name): string;
}

class childClass extends parentClass
{
    public function prefix($name, $separator = ",", $greet = "Dear"): string
    {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }

        return "$greet$separator $prefix $name";
    }
}

$person = new childClass();
$person2 = new childClass();
$result = $person->prefix("John Doe",);
$result2 = $person2->prefix("Jane Doe");
echo $result;
echo "<br>";
echo $result2;
