<?php

// handle the submission of create.php form
// store a new song into the database

require_once 'DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';

// prepare empty data
$song = new Song;

// fill the data from the request
$song->title       = $_POST['title'] ?? $song->title;
$song->author_name = $_POST['author_name'] ?? $song->author_name;
$song->genre       = $_POST['genre'] ?? $song->genre;

// save the data
$id = insert($song);

// inform the user
Session::instance()->flash('success_message', 'Song successfully inserted.');

// redirect
header("Location: edit.php?id={$id}");
