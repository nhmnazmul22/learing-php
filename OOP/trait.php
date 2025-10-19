<?php

trait message1
{
    public function msg1()
    {
        echo "OOP is fun";
    }
}

trait message2
{
    public function msg2(): void
    {
        echo "OOP is simple, if you understand";
    }
}

class Welcome
{
    use message1;
}

class Welcome2
{
    use message1, message2;
}

$obj = new Welcome();
$obj2 = new Welcome2();
$obj->msg1();
echo "<br>";
$obj2->msg1();
echo "<br>";
$obj2->msg2();
