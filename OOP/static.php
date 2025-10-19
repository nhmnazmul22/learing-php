<?php

// class greeting
// {
//     public static function welcome()
//     {
//         echo "Welcome, to php journey";
//     }
// }

// greeting::welcome();

// Example 02 ============================
// class greeting
// {
//     public static function welcome()
//     {
//         echo "Hello World!";
//     }

//     public function __construct()
//     {
//         self::welcome();
//     }
// }

// new greeting();

// Example 03 ============================
// class A
// {
//     public static function welcome()
//     {
//         echo "Welcome to new world";
//     }
// }

// class B
// {
//     public function message()
//     {
//         A::welcome();
//     }
// }


// $obj = new B;
// $obj->message();

// Example 04 ============================

class Domain
{
    protected static function getWebsiteName(): string
    {
        return "W3Schools.com";
    }
}

class DomainW3 extends Domain
{
    public  $websiteName;

    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
}


$domainW3 = new DomainW3();
echo $domainW3->websiteName;
