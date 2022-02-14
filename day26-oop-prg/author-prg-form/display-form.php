<?php

require_once 'Author.php';
require_once 'DBBlackbox.php';

// prepare all the data

// we are editing an existing record
// if there is 'id' in the URL and
// it is not a falsy value
$is_edit = !empty($_GET['id']);

if ($is_edit) {

    // select an author from the database
    $author = find($_GET['id'], 'Author');

} else {

    // prepare empty Author
    $author = new Author;

}

$all_authors = select(null, null, 'Author');


// we definitely have an Author object!

// at the end
include 'form.php';