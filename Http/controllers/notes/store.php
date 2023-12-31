<?php

use Core\App;
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$db = App::resolve(Database::class);
$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required.';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'header' => 'Create a New Note',
        'errors' => $errors
    ]);
}


if (empty($errors)) {
    $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

    header('location: /notes');
    die();
}

view('notes/create.view.php', [
    'header' => 'Create a New Note',
    'errors' => $errors
]);