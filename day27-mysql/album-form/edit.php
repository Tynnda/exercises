<?php

require_once 'Album.php';
require_once 'DBBlackbox.php';

// prepare existing data
$id = $_GET['id'];
$album = find($id, 'Album');


// display form

?>

<form action="update.php?id=<?= $id ?>" method="post">

    <input
        type="text"
        name="name"
        value="<?= $album->name ?>"
        placeholder="name"
    >

    <input
        type="text"
        name="year"
        value="<?= $album->year ?>"
        placeholder="year"
    >

    <button>Save</button>

</form>