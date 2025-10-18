<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request("GET", "https://jsonplaceholder.typicode.com/todos/1");
$body = $response->getBody();
$data = json_decode($body, true);
// var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todo</h1>
    <p>Title: <?php echo $data["title"] ?></p>
</body>

</html>