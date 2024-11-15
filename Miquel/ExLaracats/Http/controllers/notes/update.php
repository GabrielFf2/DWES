<?php

use Core\Database;
use Core\App;

$db = App::container()->resolve(\Core\Database::class);
$currentUserId = 1 ;

$note = $db->query('SELECT * FROM notes where id = :id ', [
    'id' => $_POST['id'],
])->findOrFail();

authorize($note['user_id'] == $currentUserId);

$errors = [];

if (!Validator::string($_POST["body"], 1, 255)) {
    $errors["body"] = "A body of no more than 255 characters is required.";
}

if (count($errors)) {
    return view('notes/edit.view.php',[
        'heading' => 'Edit note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('UPDATE notes SET body = :body WHERE id = :id ', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

header('location: /notes');
die();