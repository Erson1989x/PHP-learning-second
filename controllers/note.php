<?php

$config = require "config.php";

$db = new Database($config['database']);

$heading = "My Note";


$note =  $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
    ])->fetch(PDO::FETCH_ASSOC);

    if(!$note) {
        abourt();
    }

    $currentUserId = 1; // Replace with the actual current user ID from your authentication system

    if(! $note['user_id'] !== $currentUserId) {
        abourt(Response::FORBIDDEN);
    }




require "views/note.view.php";