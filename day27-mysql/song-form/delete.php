<?php

// delete an existing song from the database:
// ------------------------------------------

require_once 'DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';

// 1. find existing song in database
$id = $_GET['id'];
$song = find($id, 'Song');

// 2. delete it
delete($song->id);

Session::instance()->flash('success_message', 'Song successfully deleted.');

// 3. redirect
header('Location: index.php');