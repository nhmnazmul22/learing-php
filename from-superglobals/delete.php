<?php
// var_dump($_GET);

if (isset($_GET["id"])) {
    $contactsFile = "contact.json";
    $contact = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];

    // Remove the contact by id
    $contact = array_filter($contact, fn($contact) => $contact["id"] != $_GET["id"]);

    file_put_contents($contactsFile, json_encode($contact, JSON_PRETTY_PRINT));

    echo "Contact Deleted";
}
