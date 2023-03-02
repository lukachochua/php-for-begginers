<?php

$_SESSION['name'] = 'Luka';

view("index.view.php", [
    'heading' => 'Home',
]);