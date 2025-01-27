<?php

$heading = "Create Note";

require 'Validator.php';
$config = require('config.php');


$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $errors = [];

  if(!Validator::string($_POST['body'], 1, 1000)){
    $errors['body'] = 'A body of no more than 1000 chars is required';
  }

  if(empty($errors)){ 
      $db->query('insert into notes(body,user_id) values(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1,
      ]);
  };
}

require 'views/note-create.view.php';