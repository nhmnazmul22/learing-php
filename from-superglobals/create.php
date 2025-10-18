<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $email && $password) {
        echo "Contact added: $name ($email, $password)";

    } else {
        echo "Invalid input";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From and Superglobals</title>
</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="file" id="password" name="image">
        <br>
        <button type="submit">Submit</button>
    </form>



</body>

</html>