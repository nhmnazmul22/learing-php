<?php

class GoodBye
{
    public const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com! <br>";
    public function byeBye(): string
    {
        return self::LEAVING_MESSAGE;
    }
}

echo GoodBye::LEAVING_MESSAGE;
$goodBye = new GoodBye();
echo $goodBye->byeBye();
