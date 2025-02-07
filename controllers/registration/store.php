<?php

use Core\Database;
use Core\Validator;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (!Validator::email($email)) {
  $errors['email'] = 'please provide a valid email adress';
}
if (!Validator::string($password, 3, 255)) {
  $errors['password'] = 'please provide a valid password';
}

if(! empty($errors)){
  return view('registration/create.view.php', [
    'errors' => $errors,
  ]);
}

echo('hello this istesting');

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
  'email' => $email
])->find();

if($user){

  header('location: /');
  die();
}else{
  $db->query('insert into users(email, password) values(:email, :password)', [
    'email'=> $email,
    'password'=>password_hash($password, PASSWORD_BCRYPT),
  ]);

  $_SESSION['user'] = [
    'email' => $email,
  ];

  header('location: /');
  die();
}