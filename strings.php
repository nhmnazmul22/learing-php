<?php

$str = "Hello from php";
$str2 = "   Hello    PHP   , How are you   ?";
echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo str_word_count($str) . "<br>";
echo strlen($str) . "<br>";
echo strpos($str, "php") . "<br>";
echo str_replace("php", "PHP", $str) . "<br>";
echo strrev($str) . "<br>";

echo trim($str2) . "<br>";

$splitStr = explode(" ", $str);
print_r($splitStr);
echo "<br>";
echo substr($str, 6, 5) . "<br>";
echo substr($str, 6) . "<br>";
echo substr($str, -3, 3) . "<br>";
echo substr($str, 5, -2) . "<br>";
echo "We are the\nso-called\x48\x65\x6c\x6c\x6f\"Vikings\" from the north.";
