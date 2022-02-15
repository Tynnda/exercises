<?php

// handle the submission of create.php form
// store a new song into the database

require_once 'DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';

// validate the incoming data
$valid = true;
$errors = [];

if (empty($_POST['title'])) {
    // if title is empty
    $errors[] = 'The title cannot be left empty.';
    $valid = false;
}

if (empty($_POST['genre'])) {
    // if genre is empty
    $errors[] = 'Please choose one of the genres.';
    $valid = false;
}

if (!$valid) {
    // inform the user
    Session::instance()->flash('errors', $errors);

    // make it so the form displays with the wrong data
    Session::instance()->flashRequest();

    // don't proceed
    header('Location: create.php');
    exit();
}

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
