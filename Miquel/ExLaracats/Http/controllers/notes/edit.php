<?php

use Core\Database;
use Core\App;

$db = App::container()->resolve(\Core\Database::class);
$currentUserId = 1 ;

$note = $db->query('SELECT * FROM notes where id = :id ', [
    'id' => $_GET['id'],
])->findOrFail();

authorize($note['user_id'] == $currentUserId);

view("notes/edit.view.php",[
    'heading' => "Edit note",
    'errors' => [],
    'note' => $note,
]);