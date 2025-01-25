<?php

require './functions.php';

// require './router.php';

$dsn = 'mysql:host=localhost;port=3600;dbname=myapp;user=root;charset=utf8mb4';
$pdo = new PDO($dsn);

$statement = $pdo->prepare('select * from posts');

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
  echo '<li>';
  echo $post['title'];
  echo '</li>';
}