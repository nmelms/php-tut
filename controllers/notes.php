<?php

$heading = 'My Notes ';

$config = require('config.php');
$db = new Database($config['database']);
$query = 'select * from notes where user_id = 1';
$all_notes = $db->query($query)->fetchAll();

require 'views/notes.view.php';