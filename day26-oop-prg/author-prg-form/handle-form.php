<?php

require_once 'Author.php';
require_once 'DBBlackbox.php';

// handle form's submission
$is_edit = !empty($_GET['id']);

if ($is_edit) {

    // select an author from the database
    $author = find($_GET['id'], 'Author');

} else {

    // prepare empty Author
    $author = new Author;

}

// we definitely have an Author object!

$author->name = $_POST['name'] ?? $author->name;
$author->country = $_POST['country'] ?? $author->country;
$author->date_of_birth = $_POST['date_of_birth'] ?? $author->date_of_birth;

// same result as the lines above
// foreach (['name', 'country', 'date_of_birth'] as $key) {
//     if (isset($_POST[$key])) {
//         $author->{$key} = $_POST[$key];
//     }
// }

// same result as the lines above
// $author->hydrateFromRequest();

// save the author
if ($is_edit) {
    update($author->id, $author);
} else {
    $author->id = insert($author);
}


// at the end
// redirect! (to display-form.php)
//                display-form.php?id=1
//                display-form.php?id=2
//                display-form.php?id=3
header("Location: display-form.php?id={$author->id}");