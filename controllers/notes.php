<?php

$config = require "config.php";

$db = new Database($config['database']);

$heading = "My Notes";

$notes =  $db->query("SELECT * FROM notes")->fetchAll(PDO::FETCH_ASSOC);




require "views/notes.view.php";