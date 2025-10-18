<?php
// for loop
for ($i = 0; $i <= 5; $i++) {
    echo $i, " ";
}
// while loop
$i = 1;
while ($i <= 5) {
    echo $i, " ";
    $i++;
}
;

// foreach
$fruits = ["apple", "banana", "mango"];

foreach ($fruits as $fruit) {
    echo $fruit, " ";
}