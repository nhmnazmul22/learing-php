<?php


require "vendor/autoload.php";
use Nhmnazmul\Composer\MyApp;

// use GuzzleHttp\Client;

// $client = new Client();
// $response = $client->request("GET", "https://jsonplaceholder.typicode.com/todos/1");
// $body = $response->getBody();
// $data = json_decode($body, true);

// var_dump($data);

$app = new MyApp();
$app->run();