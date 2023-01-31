<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$currentUserId = 3;

$note = $db->query('SELECT * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query("DELETE from notes where id=:id", [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
