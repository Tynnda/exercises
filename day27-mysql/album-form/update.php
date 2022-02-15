<?php

require_once 'Album.php';
require_once 'DBBlackbox.php';

// prepare existing data
$id = $_GET['id'];
$album = find($id, 'Album');

// fill it from request
$album->name = $_POST['name'];
$album->year = $_POST['year'];

// save the data
update($id, $album);

// redirect
header('Location: edit.php?id=' . $id);