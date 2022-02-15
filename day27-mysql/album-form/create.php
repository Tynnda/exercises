<?php

require_once 'Album.php';

// prepare empty data
$album = new Album;

// display form

?>
<form action="store.php" method="post">

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