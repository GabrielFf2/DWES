<?php


use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$email = $_POST["email"];
$password = $_POST["password"];

$errors = [];
if (!\Core\Validator::email($email)){
    $errors['email'] = "Please enter a valid email address";
}

if (!\Core\Validator::string($password,7,30)){
    $errors['password'] = "Please enter a valid email password mini 7 characters";
}

if (!empty($errors)){
    return view('registration/create.view.php' , [
        'errors' => $errors
    ]);
}

$user = $db->query("SELECT * FROM users WHERE email = :email" , [
    'email' => $email,
])->find();


if ($user){
    header("Location: /");
    exit();
}else{
    $db->query("INSERT INTO users (email, password) VALUES (:email, :password)",[
        'email' => $email,
        'password' => password_hash($password,PASSWORD_BCRYPT)
    ]);

    login($user);

    header("Location: /");
    exit();
}






















