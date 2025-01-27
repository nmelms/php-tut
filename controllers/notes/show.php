<?php
$heading = 'Note';

$config = require 'config.php';
$db = new Database($config['database']);

$query = 'select * from notes where id = :id';
$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 1);

require 'views/notes/show.view.php';