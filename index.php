<?php

require 'functions.php';

// require 'router.php';
require 'Database.php';

$config = require('config.php');
$id = $_GET['id'];
$db = new Database($config['database']);
$query = 'select * from posts where id = ?';
$posts = $db->query($query, [$id])->fetchAll();


foreach ($posts as $post) {
  echo '<li>';
  echo $post['title'];
  echo '</li>';
}