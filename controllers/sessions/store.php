<?php
use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];


if (!Validator::email($email)) {
  $errors['email'] = 'please provide a valid email adress';
}
if (!Validator::string($password)) {
  $errors['password'] = 'please provide a valid password';
}

if(!empty($errors)){
  return view('sessions/create.view.php', [
    'errors'=>$errors,
  ]);
}

$user = $db->query('select * from users where email = :email', [
  'email'=>$email,
])->find();

if($user){
  if(password_verify($password, $user['password'])){
    login([
      'email'=>$email,
    ]);
  
    header('location: /');
    die();
  }
}

return view('sessions/create.view.php', [
  'errors'=> [
    'email'=>'emailadress or password is incorrect'
  ]
]);


