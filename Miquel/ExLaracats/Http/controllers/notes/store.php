<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::container()->resolve(\Core\Database::class);

$errors = [];

$validator = new Validator();

if (!Validator::string($_POST["body"], 1, 255)) {
    $errors["body"] = "A body of no more than 255 characters is required.";
}

if (! empty($errors)) {
    //VALIDATION ISSUE

    view("notes/create.view.php",[
        'heading' => "Create note",
        'errors' => $errors
    ]);
}

if (empty($errors)) {
    $db->query('INSERT INTO notes (body , user_id) VALUES (:body, :user_id)', [
        ":body" => $_POST["body"],
        ":user_id" => 1
    ]);


}
