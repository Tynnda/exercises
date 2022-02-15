<?php

// handle the submission of edit.php form
// update an existing song in the database

require_once 'DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';

$id = $_GET['id'];

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
    header('Location: edit.php?id=' . $id);
    exit();
}

// prepare existing data
$song = find($id, 'Song');

// fill it from request
$song->title       = $_POST['title'] ?? $song->title;
$song->author_name = $_POST['author_name'] ?? $song->author_name;
$song->genre       = $_POST['genre'] ?? $song->genre;

// save the data
update($song->id, $song);

// inform the user of a success
$session = Session::instance();
$session->flash('success_message', 'Song successfully saved.');

// redirect
header("Location: edit.php?id={$song->id}");