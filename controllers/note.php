<?php

$heading = 'Note';

$config = require('config.php');
$db = new Database($config['database']);

$query = 'select * from notes where id = :id';
$note = $db->query($query, ['id' => $_GET['id']])->fetch();

require 'views/note.view.php';