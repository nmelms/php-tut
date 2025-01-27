<?php

$heading = "Create Note";

$config = require('config.php');
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $errors = [];

  if(strlen($_POST['body']) === 0){
    $errors['body'] = 'a body is required';
  }else if(strlen($_POST['body']) > 100){
    $errors['body'] = 'body cannot be more than 1000 characters';
  }

  if(empty($errors)){
      $db->query('insert into notes(body,user_id) values(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1,
      ]);
  };
}

require 'views/note-create.view.php';