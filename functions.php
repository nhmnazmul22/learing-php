<?php

use BcMath\Number;
// Normal Function
function simple()
{
    echo "Hello world";
}
simple();

echo "<br>";

// Function with parameter
function greeting($name)
{
    echo "Hello, $name";
}
greeting("Nazmul");

echo "<br>";

// function with default parameter
function greet($name = "Guest")
{
    echo "Hello, $name";
}

greet();
echo "<br>";
// function return
function addition($a, $b)
{
    return $a + $b;
}
$result = addition(5, 6);
echo $result;