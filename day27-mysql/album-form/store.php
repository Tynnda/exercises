<?php

require_once 'Album.php';
require_once 'DBBlackbox.php';

// prepare empty data
$album = new Album;

// fill it from request
$album->name = $_POST['name'];
$album->year = $_POST['year'];

// save the data
$newly_inserted_id = insert($album);

// redirect
header('Location: edit.php?id=' . $newly_inserted_id);