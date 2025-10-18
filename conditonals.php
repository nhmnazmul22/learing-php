<?php
// If-else and comparison operator
// ===
// ==
// != or <>
// !==
// <
// <=
// >
// >=
$age = 18;
if ($age >= 18) {
    echo "You need to find a Job, bro!!";
} else if ($age > 10) {
    echo "You should learn more for future";
} else {
    echo "You can do anything, you are so little";
}

// Logical Operator
// &&
// ||
// !

$isWorking = false;

if ($age >= 18 && !$isWorking) {
    echo "You should find a job";
}

if ($age >= 18 || !$isWorking) {
    echo "You should do a job";
}

// Switch
$day = 6;

switch ($day) {
    case 1:
        echo "Friday";
        break;
    case 2:
        echo "Saturday";
        break;
    case 3:
        echo "Sunday";
        break;
    case 4:
        echo "Monday";
        break;
    case 5:
        echo "Tuesday";
        break;
    case 6:
        echo "Wednesdays";
        break;
    case 7:
        echo "Thursday";
        break;
    default:
        echo "Invalid day";
        break;
}