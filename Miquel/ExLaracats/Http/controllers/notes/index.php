<?php

use Core\Database;
use Core\App;

$db = App::container()->resolve(\Core\Database::class);

$notes = $db->query('SELECT * FROM notes where user_ID = 1 ')->get();


view("notes/index.view.php",[
    'heading' => "My Notes",
    'notes' => $notes,
]);