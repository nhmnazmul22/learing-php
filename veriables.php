<?php
// Important variables

/**
 * string
 * integer
 * boolean
 * float or double
 * null
 * array 
 * Object
 * Resource
 */

$name = "Joni";
$age = 20;
$isTrue = true;
$isFalse = false;
$total = 20.25;
$salary = null;
$numbers = [10, 20, 30, 50];
$mixedArray = [30, "20", "60", 80, true, null];

// Print the variables
echo "<h1> Hello, {$name} </h1>";
echo "Hello, " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "isTrue:" . $isTrue . "<br>";
echo "isFalse:" , $isFalse ,"<br>";
echo "total:" , $total ,"<br>";
echo "salary:", $salary ,"<br>";

echo "<br>" . "<br>" . "<br>";

// Get the variables types
echo gettype($name)."<br>";
echo gettype($age) . "<br>";
echo gettype($isTrue) . "<br>";
echo gettype($isFalse) . "<br>";
echo gettype($total) . "<br>";
echo gettype($salary) . "<br>";

// Print the whole variables
print_r($name);
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($numbers);
echo "<br>";
var_dump($mixedArray);
echo "<br>";

echo "<br>" . "<br>" . "<br>";
// change the value and print type
$name = 32;
echo gettype($name);
echo "<br>";

// Variables checking function
$name = "Nazmul";
var_dump(is_string($name));
echo "<br>";
var_dump(is_int($age));
echo "<br>";
var_dump(is_double($total));
echo "<br>";
var_dump( is_null($salary));
echo "<br>";
var_dump( $salary === null);
echo "<br>";
var_dump(is_array($numbers));
echo "<br>";

// check variables is defined
echo "<br>" . "<br>" . "<br>";
var_dump(isset($name));
echo "<br>";
var_dump(isset($country));
echo "<br>";
var_dump(isset($salary));
echo "<br>";

echo "<br>" . "<br>" . "<br>";
echo "<br>" . "<br>" . "<br>";
echo "<br>" . "<br>" . "<br>";