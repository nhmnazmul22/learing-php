<?php
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// echo "<br>";
// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";

$uploadDir = "uploads/";
$contactsFile = "contact.json";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $email && $password && isset($_FILES["image"])) {

        // Ensure the uploads directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $imageName = time() . "_" . basename($_FILES["image"]["name"]);
        $imagePath = $uploadDir . $imageName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
            $contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile)) : [];


            $contacts[] = [
                "id" => rand(100000000, 200000000),
                "name" => $name,
                "email" => $email,
                "password" => hash("sha256", $password),
                "image" => $imagePath
            ];


            file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));

            echo "Contact added: $name ($email)";
        } else {
            echo "Image upload Failed";
        }

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