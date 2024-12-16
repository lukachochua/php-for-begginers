<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;


$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

$form->validate($email, $password);

if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        redirect('/');
    }
    $form->error('email', 'No matching user found for that email address and password.');
}

Session::flash('errors', $form->errors());
return redirect('/login');
