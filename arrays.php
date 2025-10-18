<?php
// Indexed Array
$fruits = ["banana", "mango", "orange"];
echo $fruits[0], "<br>";
$fruits[3] = "Jamrul";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Associative Array
$user = [
    "name" => "Nazmul",
    "email" => "nhmnazmul22@gmail.com",
    "phone" => "0182352354535",
    "hobbies" => ["Coding", "Problem solving"]
];
echo $user["email"], "<br>";

echo "<pre>";
var_dump($user);
echo "</pre>";