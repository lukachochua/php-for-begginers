<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];



view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);