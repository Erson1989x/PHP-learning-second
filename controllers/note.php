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

    if(! $note['user_id'] !== 1) {
        abourt(403);
    }




require "views/note.view.php";