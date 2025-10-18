<?php

class User
{
    public $id;
    private $username;
    protected $password;
}

$user1 = new User();
$user1->id = 1;
// $user1->username = "nhmnazmul22"; Error
// $user1->password = "12345678"; Error


class Fruits
{
    public $name;
    public $color;
    public $price;

    public function setName(string $name)
    {
        $this->name = $name;
    }
    protected function setColor(string $color)
    {
        $this->color = $color;
    }

    private function setPrice(int $price)
    {
        $this->price = $price;
    }
}

$apple = new Fruits();

$apple->setName("apple");
// $apple->setColor("Red"); Error
// $apple->setPrice(price: 10); Error
