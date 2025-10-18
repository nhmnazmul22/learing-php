<?php
$contactsFile = "contact.json";
$contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <a href="create.php">Create new user</a>

    <ul>
        <?php foreach ($contacts as $contact): ?>

            <li>
                <img src="<?php echo $contact["image"] ?>" height="50">

                <?php echo "{$contact['name']} - {$contact['email']} " ?>

                <a href="delete.php?id=<?php echo $contact['id'] ?>">Delete</a>
            </li>

        <?php endforeach; ?>

    </ul>
</body>

</html>