<?php

// delete an existing song from the database:
// ------------------------------------------

require_once 'DBBlackbox.php';
require_once 'Song.php';

// 1. find existing song in database
$id = $_GET['id'];
$song = find($id, 'Song');

// 2. delete it
delete($song->id);

// 3. redirect
header('Location: index.php');